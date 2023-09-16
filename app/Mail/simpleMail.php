<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

    class simpleMail extends Mailable{
    use Queueable, SerializesModels;

    public function __construct(
        public $subject,
        public $body ) {
    }

    public function build(): self {
        return $this->markdown('emails.simple');
    }
}
