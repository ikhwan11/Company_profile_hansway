<?php

namespace App\Notifications;

use App\Models\Applicant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ApplicationReceived extends Notification implements ShouldQueue
{
    use Queueable;

    public $applicant;

    public function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $subject = $this->applicant->applicant_name . ' | ' . $this->applicant->career->position;

        return (new MailMessage)
            ->subject($subject)
            ->greeting('Hello!')
            ->line('New Applicant has been received!')
            ->attach(public_path('storage/' . $this->applicant->cv))
            ->line('log-in into website for more info about applicant.')
            ->salutation('Regards, Hansway Indonesia');
    }
}
