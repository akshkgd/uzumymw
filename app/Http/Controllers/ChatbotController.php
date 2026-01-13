<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class ChatbotController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'active']);
    }

    public function chat(Request $request)
    {
        try {
            $message = $request->input('message');
            $history = $request->input('history', []);

            if (empty($message)) {
                return response()->json([
                    'success' => false,
                    'reply' => 'Please provide a message.'
                ], 400);
            }

            // Check if API key exists
            $apiKey = config('services.openrouter.key');
            if (empty($apiKey)) {
                Log::error('OpenRouter API key not found in .env file');
                return response()->json([
                    'success' => false,
                    'reply' => 'API key not configured. Please contact administrator.'
                ], 500);
            }

            // Code review system prompt
            $systemPrompt = "You are a senior JavaScript engineer reviewing code. Respond ONLY with valid JSON in this exact format:\n\n";
            $systemPrompt .= "{\n";
            $systemPrompt .= '  "isApproved": true/false,' . "\n";
            $systemPrompt .= '  "score": 0-10,' . "\n";
            $systemPrompt .= '  "feedback": "your feedback here"' . "\n";
            $systemPrompt .= "}\n\n";
            $systemPrompt .= "EVALUATION PROCESS:\n";
            $systemPrompt .= "1. CHECK PROBLEM CONSTRAINTS: Does problem say 'without built-in/predefined methods'?\n";
            $systemPrompt .= "2. TEST THE LOGIC: Trace through code with given values and edge cases\n";
            $systemPrompt .= "3. CHECK CORRECTNESS: Verify it solves the actual problem stated\n";
            $systemPrompt .= "4. THINK OF ALTERNATIVES within constraints:\n";
            $systemPrompt .= "   - If NO built-ins allowed: variable tracking, optimized conditionals\n";
            $systemPrompt .= "   - If built-ins OK: Math methods, Array methods, etc.\n";
            $systemPrompt .= "5. COMPARE EFFICIENCY: Count comparisons, lines, complexity\n\n";
            $systemPrompt .= "SCORING & APPROVAL:\n";
            $systemPrompt .= "- 9-10: OPTIMAL approach for given constraints + clean code\n";
            $systemPrompt .= "- 7-8: Correct logic (APPROVE) but better approach exists\n";
            $systemPrompt .= "- 5-6: Correct (APPROVE) but inefficient/verbose\n";
            $systemPrompt .= "- 3-4: Logic errors (DO NOT APPROVE)\n";
            $systemPrompt .= "- 0-2: Completely broken (DO NOT APPROVE)\n\n";
            $systemPrompt .= "CRITICAL: Approve ANY correct working solution (score >= 5)\n";
            $systemPrompt .= "Only reject if logic is WRONG, not if just suboptimal\n\n";
            $systemPrompt .= "FEEDBACK FORMAT:\n";
            $systemPrompt .= "Use clear structure with numbered points or bullet points for readability:\n";
            $systemPrompt .= "If APPROVED but not optimal:\n";
            $systemPrompt .= "'Logic is correct! ✓\\n\\nImprovements:\\n• Point 1: [specific improvement]\\n• Point 2: [specific improvement]\\n• Suggested approach: [code example]'\n\n";
            $systemPrompt .= "If NOT APPROVED:\n";
            $systemPrompt .= "'Error found:\\n• Issue: [explain error]\\n• Test case: [example that fails]\\n• Fix: [how to correct it]'\n\n";
            $systemPrompt .= "CONSTRAINT-AWARE SUGGESTIONS:\n";
            $systemPrompt .= "- If problem says 'without built-in': suggest variable tracking, optimized loops\n";
            $systemPrompt .= "- If no restriction: suggest Math.max(), Array methods, etc.\n";
            $systemPrompt .= "- If using built-in when forbidden: score 3-4 (constraint violation)\n\n";
            $systemPrompt .= "EXAMPLES:\n";
            $systemPrompt .= "Problem: 'Find max without built-ins', Code: if(a>=b&&a>=c)...else if(b>=c)...else\n";
            $systemPrompt .= '{"isApproved":true,"score":7,"feedback":"Logic is correct! ✓\\n\\nImprovements:\\n• Current: 4 comparisons with nested conditions\\n• Optimal: Variable tracking (2 comparisons)\\n• Approach: let max=a; if(b>max)max=b; if(c>max)max=c"}\n\n';
            $systemPrompt .= "Problem: 'Find max' (no restriction), Code: if(a>=b&&a>=c)...else if(b>=c)...else\n";
            $systemPrompt .= '{"isApproved":true,"score":7,"feedback":"Logic is correct! ✓\\n\\nImprovements:\\n• Best: Math.max(a,b,c) - single line, optimal\\n• Alternative: Variable tracking for manual approach\\n• Your approach: Works but verbose"}\n\n';
            $systemPrompt .= "REMEMBER: Return ONLY valid JSON, nothing else.";

            // Build messages array with system prompt and conversation history
            $messages = [
                [
                    'role' => 'system',
                    'content' => $systemPrompt
                ]
            ];

            // Add conversation history if exists
            if (!empty($history) && is_array($history)) {
                foreach ($history as $msg) {
                    if (isset($msg['role']) && isset($msg['content'])) {
                        $messages[] = [
                            'role' => $msg['role'],
                            'content' => $msg['content']
                        ];
                    }
                }
            }

            // Add current user message
            $messages[] = [
                'role' => 'user',
                'content' => $message
            ];

            // Make API request to OpenRouter
            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://openrouter.ai/api/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'openai/gpt-5.1-codex-mini',
                    'messages' => $messages
                ],
                'timeout' => 30,
            ]);

            $data = json_decode($response->getBody(), true);

            if (isset($data['choices'][0]['message']['content'])) {
                return response()->json([
                    'success' => true,
                    'reply' => $data['choices'][0]['message']['content']
                ]);
            }

            Log::error('Invalid response from OpenRouter', ['data' => $data]);
            return response()->json([
                'success' => false,
                'reply' => 'Sorry, I received an invalid response. Please try again.'
            ], 500);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error('OpenRouter API Request Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'reply' => 'Sorry, I could not connect to the AI service. Please try again later.'
            ], 500);

        } catch (\Exception $e) {
            Log::error('Chat Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());

            return response()->json([
                'success' => false,
                'reply' => 'Sorry, an unexpected error occurred. Please try again.'
            ], 500);
        }
    }
}

