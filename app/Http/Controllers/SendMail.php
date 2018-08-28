<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 24/08/2018
 * Time: 9:23 CH
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;

class SendMail
{
    public static function send($emailTo,$template) {
        Mail::to($emailTo)
            ->send($template);
    }
}