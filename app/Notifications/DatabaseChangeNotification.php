<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DatabaseChangeNotification extends Notification
{
    use Queueable;

    protected $audit;

    public function __construct($audit)
    {
        $this->audit = $audit;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
{
    return (new MailMessage)
        ->subject('Cambio en la Base de Datos')
        ->line('Se ha realizado un cambio en la base de datos.')
        ->line('Modelo: ' . $this->audit->auditable_type)
        ->line('ID: ' . $this->audit->auditable_id)
        ->line('Usuario: ' . ($this->audit->user ? $this->audit->user->name : 'Desconocido'))
        ->line('Acción: ' . $this->audit->event)
        ->line('Detalles:')
        ->line(json_encode($this->audit->getModified(), JSON_PRETTY_PRINT)) // Convertir a JSON
        ->line('Gracias por usar nuestra aplicación!');
}

}

