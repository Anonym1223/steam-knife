<?php

namespace App\Http\Controllers;

use App\Models\Knife;
use App\Models\purchese;
use Illuminate\Http\Request;

class KnifeController extends Controller
{
    public function buy($id){
        $knife = Knife::findOrFail($id);
        $purchese = new purchese();
        $purchese->user= auth()->user->id;
        $purchese->knife= $knife->id;
        $purchese->save();
        return $purchese;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Knife::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $knife = Knife::findOrFail($id);
        return $knife;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
