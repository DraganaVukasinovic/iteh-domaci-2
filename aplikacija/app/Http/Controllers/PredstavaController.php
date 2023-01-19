<?php

namespace App\Http\Controllers;

use App\Models\Predstava;
use Illuminate\Http\Request;

class PredstavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Predstava::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Predstava  $predstava
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Predstava::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Predstava  $predstava
     * @return \Illuminate\Http\Response
     */
    public function edit(Predstava $predstava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Predstava  $predstava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Predstava $predstava)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Predstava  $predstava
     * @return \Illuminate\Http\Response
     */
    public function destroy(Predstava $predstava)
    {
        //
    }
}
