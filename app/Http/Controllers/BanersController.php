<?php

namespace App\Http\Controllers;

use App\Models\baners;
use Illuminate\Http\Request;

class BanersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index');

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
        $file = $request->file('topAdBanner');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/madias/', $filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function show(baners $baners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function edit(baners $baners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baners $baners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baners  $baners
     * @return \Illuminate\Http\Response
     */
    public function destroy(baners $baners)
    {
        //
    }
}
