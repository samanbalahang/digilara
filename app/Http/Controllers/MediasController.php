<?php

namespace App\Http\Controllers;

use App\Models\medias;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.media.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media = new medias;
        $media->photoName = 'd';
        $media->photoPath = 'd';
        $media->photoAlt = 'd';
        $media->photoDescript = 'd';
        $media->save();
        $media=medias::create(
            [
                'photoName'=>'s',
                'photoPath'=> 's',
                'photoAlt'=>'s',
                'photoDescript'=>'s',
            ]
        );

        $file = $request->file('ImgP');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =$this->randomNum() .'.'.$extension;
        $file->move('uploads/madias/', $filename);
        $finaldes = 'uploads/madias/'.$filename;
        $a = $request;
        $a['photo_path']=$finaldes;
        unset($a['ImgP']);

//        dd($a['photo_name']);
        $media=medias::create(
            [
                'photoName'=>'s',
                'photoPath'=> 's',
                'photoAlt'=>'s',
                'photoDescript'=>'s',
            ]
        );

    }

    public function randomNum(){
        $first = rand(1,100);
        $sec = rand(100,1000);
        $final = rand($first,$sec);
        $alafabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $alfrand = rand(0,27);

        $alf = $alafabet[$alfrand];
        $alfrand = rand(0,27);
        $alf = strval($alf).$alafabet[$alfrand];
        $alfrand = rand(0,27);
        $alf = strval($alf).strval($alafabet[$alfrand]);
        return strval($final) . "-". strval(time());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function show(medias $medias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function edit(medias $medias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medias $medias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function destroy(medias $medias)
    {
        //
    }
}
