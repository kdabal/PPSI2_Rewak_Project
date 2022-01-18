<?php

namespace App\Listeners;

use App\Events\SupplyCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CreatLog
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
        $product = Product::find( $event->request['productid'])->first();
        $userid = Auth::user()->id;
        $log = DB::table('logs')->insert([
            'userid' => $userid,
            'description' => 'User dodał '.$product->name.' w ilości '.$event->request['count']
        ]);
    }
}
