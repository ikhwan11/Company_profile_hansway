<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ContactReceived extends Notification implements ShouldQueue
{
    use Queueable;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $subject = $this->contact->company . ' | ' . $this->contact->name;
        $line = $this->contact->request;
        $salutation = $this->contact->name;

        return (new MailMessage)
            ->subject($subject)
            ->greeting('Hello Hansway Indonesia!')
            ->line($line)
            ->salutation('Regards, ' . $salutation);
    }
}
