<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AkunPendaftaranMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $email;
    public $password;
    public $nama;

    public function __construct($nama, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Informasi Akun PPDB')
            ->view('emails.akun-ppdb');
    }
}
