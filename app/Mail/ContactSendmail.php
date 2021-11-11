<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $your_name;
    private $email;
    private $url;
    private $gender;
    private $age;
    private $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $inputs )
    {
        $this->your_name = $inputs['your_name'];
        $this->email = $inputs['email'];
        $this->url = $inputs['url'];
        $this->gender  = $inputs['gender'];
        $this->age = $inputs['age'];
        $this->contact  = $inputs['contact'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('example@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
                'your_name' => $this->your_name,
                'email' => $this->email,
                'url' => $this->url,
                'gender'  => $this->gender,
                'age' => $this->age,
                'contact'  => $this->contact,
            ]);
    }
}
