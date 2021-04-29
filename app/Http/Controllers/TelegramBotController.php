<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Telegram;
use Carbon\Carbon;
use Exception;
use Telegram\Bot\Api;

class TelegramBotController extends Controller
{
    protected $telegram;
    protected $chat_id;
    protected $username;
    protected $text;
 
    public function __construct()
    {
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
    }
    public function updatedActivity()
    {
        

        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $a = $telegram->removeWebhook();
        $response = $telegram->getUpdates(["limit"=>'5', "offset"=>'253970086']);
        // $response = $response->take(10)->get();
    
        dd($response);
        foreach ($response as $r) { 
           $id = ($r['message']['chat']['id']);
            $text =  ($r['message']['text']);
        
            $response = $telegram->sendMessage([
            
            'chat_id' => $id, 
            'text' => $text,
            
          ]); $messageId = $response->getMessageId();
          
            }
          
         dd($messageId);
          
    }
    

    
    public function getMe()
    {
        $response = $this->telegram->getMe();
        return $response;
    }

    public function setWebHook()
    {
        $url = 'https://codekaro.in/' . env('TELEGRAM_BOT_TOKEN') . '/webhook';
        $response = $this->telegram->setWebhook(['url' => $url]);
        
        return $response == true ? redirect()->back() : 
        dd($response);
    }
 
    public function handleRequest(Request $request)
    {
        $this->chat_id = $request['message']['chat']['id'];
        $this->username = $request['message']['from']['username'];
        $this->text = $request['message']['text'];

       
        $response = Telegram::sendMessage([
            'chat_id' => $request['message']['chat']['id'], 
            'text' => 'Testing Codekaro!!'
          ]);
          
          $messageId = $response->getMessageId();
        //   dd($response);
 
        switch ($this->text) {
            case '/start':
            case '/menu':
                $this->showMenu();
                break;
            case '/getGlobal':
                $this->showGlobal();
                break;
            case '/getTicker':
                $this->getTicker();
                break;
            case '/getCurrencyTicker':
                $this->getCurrencyTicker();
                break;
            default:
                $this->checkDatabase();
        }
    }
    public function showMenu($info = null)
    {
        $message = '';
        if ($info) {
            $message .= $info . chr(10);
        }
        $message .= '/menu' . chr(10);
        $message .= '/getGlobal' . chr(10);
        $message .= '/getTicker' . chr(10);
        $message .= '/getCurrencyTicker' . chr(10);
 
        $this->sendMessage($message);
    }
 
    public function showGlobal()
    {
        $data = CoinMarketCap::getGlobalData();
 
        $this->sendMessage($this->formatArray($data), true);
    }
 
    public function getTicker()
    {
        $data = CoinMarketCap::getTicker();
        $formatted_data = "";
 
        foreach ($data as $datum) {
            $formatted_data .= $this->formatArray($datum);
            $formatted_data .= "-----------\n";
        }
 
        $this->sendMessage($formatted_data, true);
    }
 
    public function getCurrencyTicker()
    {
        $message = "Please enter the name of the Cryptocurrency";
 
        Telegram::create([
            'username' => $this->username,
            'command' => __FUNCTION__
        ]);
 
        $this->sendMessage($message);
    }
 
    public function checkDatabase()
    {
        try {
            $telegram = Telegram::where('username', $this->username)->latest()->firstOrFail();
 
            if ($telegram->command == 'getCurrencyTicker') {
                $response = CoinMarketCap::getCurrencyTicker($this->text);
 
                if (isset($response['error'])) {
                    $message = 'Sorry no such cryptocurrency found';
                } else {
                    $message = $this->formatArray($response[0]);
                }
 
                Telegram::where('username', $this->username)->delete();
 
                $this->sendMessage($message, true);
            }
        } catch (Exception $exception) {
            $error = "Sorry, no such cryptocurrency found.\n";
            $error .= "Please select one of the following options";
            $this->showMenu($error);
        }
    }
 
    protected function formatArray($data)
    {
        $formatted_data = "";
        foreach ($data as $item => $value) {
            $item = str_replace("_", " ", $item);
            if ($item == 'last updated') {
                $value = Carbon::createFromTimestampUTC($value)->diffForHumans();
            }
            $formatted_data .= "<b>{$item}</b>\n";
            $formatted_data .= "\t{$value}\n";
        }
        return $formatted_data;
    }
 
    protected function sendMessage($message, $parse_html = false)
    {
        $data = [
            'chat_id' => $this->chat_id,
            'text' => $message,
        ];
 
        if ($parse_html) $data['parse_mode'] = 'HTML';
 
        $this->telegram->sendMessage($data);
    }
}

