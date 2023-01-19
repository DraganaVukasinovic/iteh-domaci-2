<?php

namespace App\Http\Controllers;

use App\Http\Resources\IzvodjenjeResource;
use App\Models\Izvodjenje;
use App\Models\Pozoriste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IzvodjenjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IzvodjenjeResource::collection(Izvodjenje::all());
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
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'pozoriste' => 'required|integer',
            'predstava' => 'required|integer',
 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $i = Izvodjenje::create([
            'datum' => $request->datum, 
            'pozoriste' => $request->pozoriste, 
            'predstava' => $request->predstava,
 


        ]);
        $i->save();
        return response()->json(['Objekat je  kreiran', $i]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izvodjenje  $izvodjenje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new IzvodjenjeResource(Izvodjenje::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izvodjenje  $izvodjenje
     * @return \Illuminate\Http\Response
     */
    public function edit(Izvodjenje $izvodjenje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Izvodjenje  $izvodjenje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'pozoriste' => 'required|integer',
            'predstava' => 'required|integer',
 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $i = Izvodjenje::find($id);
        if($i){
            $i->datum=$request->datum;
            $i->pozoriste=$request->pozoriste;
            $i->predstava=$request->predstava;
            $i->save();
            return response()->json( ["Uspesno izmenjeno!",$i]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izvodjenje  $izvodjenje
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $i = Izvodjenje::find($id);
        $i->delete();
        return response()->json(["Objekat obrisan",$i]);

    }
}
