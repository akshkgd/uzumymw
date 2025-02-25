<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/'.env('TELEGRAM_BOT_TOKEN'),'TelegramController@index')->name('webhook');
Route::get('uzumymw', 'TopicController@getUsers');
Route::get('/admin/reports-data', 'AdminController@getReportsData')->middleware(['auth', 'isAdmin']);