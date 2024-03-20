<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $client;
    
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function build()
    {
        return $this->from('LawFirmX@example.com')
                    ->view('emails.welcome')
                    ->with('client', $this->client);
    }
}
