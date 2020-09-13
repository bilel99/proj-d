<?php

namespace App\Mail;

use App\Models\Society;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Society
     */
    protected $society;

    /**
     * Create a new message instance.
     *
     * @param Society $society
     */
    public function __construct(Society $society)
    {
        $this->society = $society;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(
                $this->society === null ? 
                    config('docteurs_gardes.email_docteur_de_garde', '') :
                    $this->society->email
            )
            ->subject(__('globals.email.subject'))
            ->markdown('email.contact');
    }
}
