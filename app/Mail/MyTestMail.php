<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data=$this->details['title'];
        return $this->subject('JOB MAIL')
        ->view('emails.myMail',compact('data'))
       
        // ->attach($this->details['file']->getRealPath(), array(
        //     'as'=>'file.' . $this->details['file']->getClientOriginalName(),
        //     'mime' => $this->details['file']->getMimeType())
        //  )

// 
                ->with('details', $this->details);



    }
}
