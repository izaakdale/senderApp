<?php

use Illuminate\Support\Facades\Route;
use Spatie\WebhookServer\WebhookCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendwebhook', function () {

    WebhookCall::create()
        ->url('http://localhost:1972/webhook-receiving-url')
        ->payload(['data' => 'dummyData'])
        ->useSecret('izaak_webhook')
        ->dispatch();
});
