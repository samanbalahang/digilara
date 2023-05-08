<?php

namespace App\Http\Controllers;

use App\Models\thepublic;
use Illuminate\Http\Request;

class ThepublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  \App\Models\thepublic  $thepublic
     * @return \Illuminate\Http\Response
     */
    public function show(thepublic $thepublic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thepublic  $thepublic
     * @return \Illuminate\Http\Response
     */
    public function edit(thepublic $thepublic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thepublic  $thepublic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thepublic $thepublic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thepublic  $thepublic
     * @return \Illuminate\Http\Response
     */
    public function destroy(thepublic $thepublic)
    {
        //
    }
}
