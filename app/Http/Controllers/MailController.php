<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'Web dev'], function ($message) {
            $message->to('olarucristi@hotmail.com', 'To web dev')->subject('Test email');
            $message->from('olarucristi@hotmail.com', 'Web dev');
        });
    }
}