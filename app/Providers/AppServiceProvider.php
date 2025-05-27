<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function($notitiable,$url){
            return (new MailMessage)
            ->subject('Verificar Cuenta')
            ->line('Tu Cuenta ya esta casi lista, solo debes presionar el enlace a continuación.')
            ->action('Confirma Cuenta',$url)
            ->line('Si no creaste esta cuenta ignora este enlace.');
        });
    }
}
