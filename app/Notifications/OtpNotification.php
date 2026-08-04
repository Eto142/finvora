<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OtpNotification extends Notification
{
    use Queueable;

    public function __construct(protected string $code)
    {
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your verification code')
            ->greeting("Hi {$notifiable->name},")
            ->line('Use the code below to verify your email address and activate your account.')
            ->line(new \Illuminate\Support\HtmlString("<div style=\"font-size:28px;font-weight:700;letter-spacing:6px;text-align:center;margin:16px 0;\">{$this->code}</div>"))
            ->line('This code will expire in 10 minutes.')
            ->line('If you did not create an account, no further action is required.');
    }
}
