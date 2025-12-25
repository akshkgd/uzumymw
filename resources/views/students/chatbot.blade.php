@extends('layouts.t-student')
@section('content')
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Chatbot Container -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-2xl font-bold">CodeKaro Support</h1>
                            <p class="text-blue-100 text-sm mt-1">Get instant help with courses, certificates & more</p>
                        </div>
                        <div class="bg-white bg-opacity-20 rounded-full p-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Chat Messages Area -->
                <div id="chatMessages" class="h-96 overflow-y-auto p-6 space-y-4 bg-gray-50">
                    <!-- Bot Welcome Message -->
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                                B
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-white rounded-lg rounded-tl-none shadow-md p-4 max-w-md">
                                <p class="text-gray-800">👋 Hey! I can help you with your courses, certificates, group links, account issues, and more. What's up?</p>
                            </div>
                            <span class="text-xs text-gray-500 mt-1 block ml-1">Just now</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Questions -->
                <div class="bg-white border-t border-gray-200 p-4">
                    <p class="text-sm text-gray-600 mb-2">Quick questions:</p>
                    <div class="flex flex-wrap gap-2">
                        <button class="quick-question bg-blue-50 hover:bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm transition">
                            How do I get my certificate?
                        </button>
                        <button class="quick-question bg-blue-50 hover:bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm transition">
                            WhatsApp group link?
                        </button>
                        <button class="quick-question bg-blue-50 hover:bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm transition">
                            Reset my password
                        </button>
                        <button class="quick-question bg-blue-50 hover:bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm transition">
                            Contact support
                        </button>
                    </div>
                </div>

                <!-- Input Area -->
                <div class="bg-white border-t border-gray-200 p-4">
                    @csrf
                    <form id="chatForm" class="flex items-center space-x-3">
                        <input 
                            type="text" 
                            id="messageInput" 
                            placeholder="Type your question here..."
                            class="flex-1 border-2 border-gray-300 rounded-full px-5 py-3 focus:outline-none focus:border-blue-500 transition"
                            required
                        >
                        <button 
                            type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white rounded-full p-3 transition transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Info Footer -->
            <div class="text-center mt-6 text-gray-600 text-sm">
                <p>Powered by AI • Responses are generated based on FAQ database</p>
            </div>
        </div>
    </div>

    <script>
        const chatMessages = document.getElementById('chatMessages');
        const chatForm = document.getElementById('chatForm');
        const messageInput = document.getElementById('messageInput');
        const quickQuestions = document.querySelectorAll('.quick-question');
        
        // Store conversation history
        let conversationHistory = [];

        function getCurrentTime() {
            const now = new Date();
            return now.toLocaleTimeString('en-US', { hour: 'numeric', minute: '2-digit' });
        }

        function addMessage(text, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex items-start space-x-3 ' + (isUser ? 'flex-row-reverse space-x-reverse' : '');
            
            // Avatar
            const avatar = document.createElement('div');
            avatar.className = 'flex-shrink-0';
            const avatarCircle = document.createElement('div');
            avatarCircle.className = 'w-10 h-10 rounded-full ' + (isUser ? 'bg-gray-600' : 'bg-blue-600') + ' flex items-center justify-center text-white font-bold';
            avatarCircle.textContent = isUser ? 'Y' : 'B';
            avatar.appendChild(avatarCircle);
            
            // Message content
            const contentDiv = document.createElement('div');
            contentDiv.className = 'flex-1';
            
            const bubble = document.createElement('div');
            bubble.className = (isUser ? 'bg-blue-600 text-white rounded-br-none ml-auto' : 'bg-white rounded-tl-none') + ' rounded-lg shadow-md p-4 max-w-md';
            
            const p = document.createElement('p');
            p.className = isUser ? 'text-white' : 'text-gray-800';
            p.textContent = text;
            
            bubble.appendChild(p);
            contentDiv.appendChild(bubble);
            
            // Timestamp
            const timestamp = document.createElement('span');
            timestamp.className = 'text-xs text-gray-500 mt-1 block ' + (isUser ? 'text-right mr-1' : 'ml-1');
            timestamp.textContent = getCurrentTime();
            contentDiv.appendChild(timestamp);
            
            messageDiv.appendChild(avatar);
            messageDiv.appendChild(contentDiv);
            chatMessages.appendChild(messageDiv);
            
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        chatForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const message = messageInput.value.trim();
            if (!message) return;
            
            // Add user message
            addMessage(message, true);
            messageInput.value = '';
            
            // Show typing indicator
            const typingDiv = document.createElement('div');
            typingDiv.className = 'flex items-start space-x-3';
            typingDiv.id = 'typing';
            typingDiv.innerHTML = '<div class="flex-shrink-0"><div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">B</div></div><div class="bg-white rounded-lg rounded-tl-none shadow-md p-4"><div class="flex space-x-2"><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div><div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div></div></div>';
            chatMessages.appendChild(typingDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
            
            // Call Laravel backend with OpenRouter
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            
            if (!csrfToken || !csrfToken.content) {
                console.error('CSRF token not found');
                const typingEl = document.getElementById('typing');
                if (typingEl) typingEl.remove();
                addMessage('Error: Security token missing. Please refresh the page.', false);
                return;
            }
            
            fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken.content
                },
                body: JSON.stringify({ 
                    message: message,
                    history: conversationHistory
                })
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                // Remove typing indicator
                const typingEl = document.getElementById('typing');
                if (typingEl) typingEl.remove();
                
                if (data.success) {
                    addMessage(data.reply, false);
                    
                    // Add to conversation history
                    conversationHistory.push({
                        role: 'user',
                        content: message
                    });
                    conversationHistory.push({
                        role: 'assistant',
                        content: data.reply
                    });
                    
                    // Keep only last 10 exchanges (20 messages) to avoid token limits
                    if (conversationHistory.length > 20) {
                        conversationHistory = conversationHistory.slice(-20);
                    }
                } else {
                    addMessage('Sorry, I encountered an error. Please try again or contact support@codekaro.in', false);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
                const typingEl = document.getElementById('typing');
                if (typingEl) typingEl.remove();
                addMessage('Sorry, I could not connect to the server. Please check your connection and try again.', false);
            });
        });

        // Quick question buttons
        quickQuestions.forEach(function(button) {
            button.addEventListener('click', function() {
                messageInput.value = button.textContent;
                chatForm.dispatchEvent(new Event('submit'));
            });
        });
    </script>
</body>
@endsection