<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use function MongoDB\BSON\toJSON;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
//     */
    public $data;

    public function __construct($title, $content, $transaction)
    {
        Log::debug($title);
        Log::debug($content);
        $this->title=$title;
        $this->content=$content;
        $this->transaction=$transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::debug($this->transaction);
        return $this->from('xuanhung2401@gmail.com')
//            ->view('emails.send')->with('title', $this->title)
//            ->with('notification', $this->transaction)
//            ->with('content', $this->content);
        ->view('emails.send')
            ->with([
                'title' => $this->title,
                'content' => $this->content,
                'notification' => $this->transaction
            ]);
    }
}
