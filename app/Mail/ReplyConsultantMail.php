<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Consultant;

class ReplyConsultantMail extends Mailable
{
    use Queueable, SerializesModels;

    public $consultant;
    
    public function __construct(Consultant $consultant)
    {
        
        $this->consultant = $consultant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Rely Your consultant')
        ->markdown('emails.consultant_reply')
        ->with(['consultant' => $this->consultant])
        ->from('esraanabeh92@gmail.com','noreply');
    }
}
