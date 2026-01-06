<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendUserWelcomeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Bem vindo(a) ao sistema 🚀')
            ->greeting("Olá, {$notifiable->name}")
            ->line('Seja muito bem vindo(a) ao nosso sistema 🎉')
            ->line('Seu cadastro foi realizado com sucesso e agora você já pode acessar a plataforma')
            ->line('A partir de agora, você terá acesso a todos os recursos disponíveis para gerenciar sua informações de forma simples e segura')
            ->action('Acessar o sistema', config('app.frontend_url'))
            ->line('Se você não realizou este cadastro, pode ignorar este e-mail com segurança')
            ->salutation('Abraços,')
            ->salutation('Equipe do Sistema');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
