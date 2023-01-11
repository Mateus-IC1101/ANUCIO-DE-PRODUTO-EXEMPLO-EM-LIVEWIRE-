<?php

namespace App\Listeners;

use App\Events\EventEnvioDeEmail;
use App\Mail\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ListenerEnvioDeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventEnvioDeEmail $event)
    {
        $testMailData = $event->nome;

        Mail::to('mateus.dolglas8@gmail.com')->send(new SendMail($testMailData));
    }
}