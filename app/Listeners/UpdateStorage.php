<?php

namespace App\Listeners;

use App\Events\SupplyCreated;
use App\Models\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateStorage
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
     * @param  \App\Events\SupplyCreated  $event
     * @return void
     */
    public function handle(SupplyCreated $event)
    {
        $userid = Auth::user()->id;
        DB::table('storages')
            ->where('userid', $userid)
            ->where('productid', $event->request['productid'])
            ->increment('count', $event->request['count']);
    }
}
