<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\SupplyCreated;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return Supply::all()->toJson();
    }
    public function supply()
    {
        $user = Auth::user()->id;
        $supply = DB::table('supplies')
            ->where('userid', $user)
            ->get()
            ->toJson();
        return $supply;
    }
    public function showSupply($productid)
    {
        $user = Auth::user()->id;
        $supply = DB::table('supplies')
            ->where('userid', $user)
            ->where('productid', $productid)
            ->orderBy('shelf_life')
            ->get()
            ->toJson();
        return $supply;

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->eventSupplyCreated($request);
        return Supply::create($request->all())->toJson();
    }
    public function eventSupplyCreated(Request $request){
        event(new SupplyCreated($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Supply::find($id)->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storage = Supply::find($id);
        $storage->update($request->all());
        return $storage->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Supply::destroy($id);
    }

    public function search($userid)
    {
        $supply = Supply::where('userid', $userid)->get()->toJson();
        return $supply;
    }
}
