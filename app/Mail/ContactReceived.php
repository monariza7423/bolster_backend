<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Contact Received')
                    ->view('emails.contact_received')
                    ->with([
                        'first_name' => $this->data['first_name'],
                        'last_name' => $this->data['last_name'],
                        'first_name_kana' => $this->data['first_name_kana'],
                        'last_name_kana' => $this->data['last_name_kana'],
                        'company' => $this->data['company'],
                        'email' => $this->data['email'],
                        'contact_type' => $this->data['contact_type'],
                        'content' => $this->data['content'],
                    ]);
    }
}
