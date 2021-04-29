<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\RequestTrait;
    use App\Traits\MakeComponents;

class TelegramController extends Controller
{
    use RequestTrait;
    use MakeComponents;
    public function webhook()
{

    return $this->apiRequest('setWebhook',[

        'url' => url(route('webhook')),

    ]) ? ['success'] : ['something wrong'];


}
public function index(){

    $result = json_decode(file_get_contents('php://input'));

    $action = $result->message->text;

    $userId = $result->message->from->id;

    if($action == '/start'){

        $text = "Please choose city that can see time";

        $option = [

          ['Tehran','Adelaide'],

          ['Istanbul','New York']

        ];

        $this->apiRequest('sendMessage',[

           'chat_id' => $userId,

           'text' => $text,

           'reply_markup' =>  $this->keyboardBtn($option)

        ]);

    }
}
}
