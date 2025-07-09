<?php


use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    
    Mail::raw('teste gmaail', function(Message $message){
        $message->to('teste@gmail.com')
        ->subject('texto da mensagem')
        ->from('rr@gmail.com');


    });
    echo 'aqui';
});
