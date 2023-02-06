<?php

namespace App\Listeners;

use App\Events\CaseCreatedEvent;
use App\Jobs\CaseEmailJob;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CaseCreatedListener
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
    public function handle(CaseCreatedEvent $event)
    {
        $insert = DB::table('cases')->insert([
            'case_title' => $event->caseTitle,
            'description' => $event->caseDetils,
            'user_id' => $event->id,
            'created_at' =>Carbon::now()
        ]);


    }
}
