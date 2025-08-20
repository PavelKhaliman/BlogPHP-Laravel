<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Http;

class NotifyTelegramAboutRegistration implements ShouldQueue
{
    public function handle(Registered $event): void
    {
        $user   = $event->user;
        $token  = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');
        if (!$token || !$chatId) {
            return;
        }

        $text = "Новая регистрация:\n🧑 " . ($user->name ?? '-') .
                "\n📧 " . ($user->email ?? '-') .
                "\n🕒 " . now()->format('Y-m-d H:i:s');

        Http::asForm()->timeout(5)->post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text'    => $text,
        ]);
    }
}
