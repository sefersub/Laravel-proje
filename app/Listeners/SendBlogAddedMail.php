<?php

namespace App\Listeners;

use App\Events\Blogadded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendBlogAddedMail
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
     * @param  Blogadded  $event
     * @return void
     */
    public function handle(Blogadded $event)
    {
        //
        Log::info('Burası mail gönderildi ve tetiklendi');
    }
}
