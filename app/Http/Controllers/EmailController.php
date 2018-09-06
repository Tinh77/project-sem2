<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    //cài thằng này: composer require swiftmailer/swiftmailer
    public function send(Request $request)
    {
////        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
//        Mail::to('xuanhung2401@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
//        return response()->json(['message' => 'Request completed']);

        $data = array('title'=>'Xin chao vietnam', 'content'=>'Day la noi dung');
        Mail::send('emails.send', $data, function($message) {
            $message->to('xuanhung2401@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('hungdx.ohm@gmail.com','Xuan Hung');
        });
        return "Okie";
    }

}
