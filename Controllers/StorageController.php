<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return Storage::all()->toJson();
    }
    public function storage()
    {
        $user = auth()->user('id');
        $user = Auth::user()->id;
        return Storage::where('userid', $user)->get()->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Storage::create($request->all())->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Storage::find($id)->toJson();
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
        $storage = Storage::find($id);
        $storage->update($request->all());
        return $storage;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Storage::destroy($id);
    }

    public function search($userid)
    {
        return Storage::where('userid', $userid)->get()->toJson();
    }
}
