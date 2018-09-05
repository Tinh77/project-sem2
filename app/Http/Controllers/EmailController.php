<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function send(Request $request)
    {
//        Mail::to('tinhgtd00580@fpt.edu.vn')->send(new OrderShipped('Chào Tình', 'Thầy đói.'));
        Mail::to('thanhtungle1235@gmail.com')->send(new OrderShipped('Chào Tùng', 'Thầy rất đói.'));
        return response()->json(['message' => 'Request completed']);
    }

}
