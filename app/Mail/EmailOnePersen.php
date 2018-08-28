<?php

namespace App\Mail;
use App\Account;
use App\Exchage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class EmailOnePersen extends Mailable
{
    use Queueable, SerializesModels;

    public $owner_id;
    public $buyer_id;
    public $token;
    public $account;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Exchage $exchage)
    {

        $this->buyer_id  = $exchage->buyer_id;
        $this->owner_id = $exchage->owner_id;
        $this->token = $exchage->token;
        $this->account = Account::where(['id' => $this->buyer_id])->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sendEmailOnePersen');
    }
}
