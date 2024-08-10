<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // Constructor vacío
    }

    public function build()
    {
        return $this->subject('Correo de Prueba')
                    ->view('emails.test'); // Ruta de la vista
    }
}
