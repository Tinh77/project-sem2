<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 24/08/2018
 * Time: 4:59 CH
 */

namespace App\Http\Controllers;


use App\Account;
use App\Exchage;
use App\Mail\EmailOnePersen;
use App\Mail\EmailTwoPersen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Array_;

class EmailSendTwo extends Controller
{
    public function sendMailTwo($token = null)
    {
        try {
            $obj = Exchage::where(['token' => $token, 'status' => 0])->first();
            if (!empty($obj)) {
                $obj->token = null;
                $obj->status = 1;
                if ($obj->save()) {
                    $accounts[] = Account::findOrFail($obj->owner_id);
                    $accounts[] = Account::findOrFail($obj->buyer_id);
                    foreach ($accounts as $account){
                        Mail::to($account->email)->send(new EmailTwoPersen($account));
                    }
                }else {
                    dd("asss");
                }
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function sendMailOne()
    {
        try {
            if (Auth::check()) {
                $obj = new Exchage();
                $obj->owner_id = Auth::id();
                $obj->buyer_id =
                    Mail::to($obj->email)->send(new EmailOnePersen($obj));
            }

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}