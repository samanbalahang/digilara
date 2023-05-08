<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Banner;
use App\Http\Controllers\admin\dashExtraController;

class dashBannercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners =Banner::all(); 
        return view("dashboard.banner.index", compact("banners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $firstMedias = Media::limit(10)->get();
        // dd($firstMedias);
        return view("dashboard.banner.create",compact("firstMedias"));
    }

    public function bannerMorMedia(Request $request){
        $firstMedias = Media::OFFSET(10)->limit(20)->get();
        return $firstMedias;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dashExtraController = new dashExtraController;
        $randomNum = $dashExtraController->randomNum();
        $a = $request;
        $media = new Media;
        if(isset($request->indeximg)){
            $file = $request->file('indeximg');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$randomNum .'.'.$extension;
            $file->move('uploads/madias/', $filename);
            $finaldes = 'uploads/madias/'.$filename;
            $a['image_path']=$finaldes;
            $media->image_path = $a['image_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] =$mediaId; 
        }
        Banner::create($a->all());
        return redirect(route("banner.index"));
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
        return view("dashboard.banner.edit", compact("id"));
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
        $dashExtraController = new dashExtraController;
        $randomNum = $dashExtraController->randomNum();
        $a = $request;
        $media = new Media;
        if(isset($request->indeximg)){
            $file = $request->file('indeximg');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =$randomNum .'.'.$extension;
            $file->move('uploads/madias/', $filename);
            $finaldes = 'uploads/madias/'.$filename;
            $a['image_path']=$finaldes;
            $media->image_path = $a['image_path'];
            $media->save();
            $mediaId = $media->id;
            $a['media_id'] =$mediaId; 
        }
        $banner = Banner::find($id);
        $banner->banner_uri = $request->banner_uri;
        $banner->banner_name = $request->banner_name;
        $banner->media_id = $a['media_id'];
        $banner->save();
        return redirect(route("banner.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
