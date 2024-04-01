<?php

namespace App\Http\Controllers;

use App\Models\Dc;
use Illuminate\Http\Request;

class DcController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
                $dcs = Dc::all();
            return view('dcs.index', compact('dcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dc  $dc
     
     */
    public function show(Dc $dc)
    {
        return view('dcs.show', compact('dc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dc  $dc
     
     */
    public function edit(Dc $dc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dc  $dc
     
     */
    public function update(Request $request, Dc $dc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dc  $dc
     
     */
    public function destroy(Dc $dc)
    {
        //
    }
}
