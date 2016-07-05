<?php

namespace FCS\Http\Controllers;

use Illuminate\Http\Request;

use FCS\Http\Requests;
use FCS\Http\Controllers\Controller;
use FCS\Adquisicion;
use Redirect;

class AdquisicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $adquisicion = Adquisicion::create($request->all());
        /*return response()->json([
            'datos' => $adquisicion->toArray()
            ]);*/
        return redirect()->back()->with('adquisicion', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adquisicion = Adquisicion::find($id);
        return response()->json(['datos' => $adquisicion->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $datos = $request->all();
        $adquisicion = Adquisicion::find($datos['id_adquisicion']);
        $adquisicion->fill($datos);
        $adquisicion->save();
        return redirect()->back()->with('adquisicion', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adquisicion::destroy($id);
        return redirect()->back()->with('adquisicion', true);
    }
}
