<?php

namespace App\Http\Controllers;

use App\Models\admin\sliders;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sliders.index');
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
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(sliders $sliders)
    {
        //
    }
}
