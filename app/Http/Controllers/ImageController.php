<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\ImageSetting;

class ImageController extends Controller
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
     * Show the form for creating a new image setting.
     *
     * @return \Illuminate\Http\Response
     */
    public function imagesetting()
    {
        //
         $setting = ImageSetting::find(1);
         $setting['types'] = explode(",",  $setting['type_allow']);
         $setting['all_types'] = ['jpg','png','gif'];
         return view('image.imagesetting', ['setting' => $setting]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $input = Request::all();
        $input['type_allow'] = implode(",",  $input['typeallow']);
        $setting = ImageSetting::find(1);
        
        
        
        if($setting){
            $setting->update($input);            
            return redirect('/dashboard')->with('status', "User Updated  Successfully");
        }else{
             $user = ImageSetting::create($input);
             return redirect('/dashboard')->with('status', "User Updated  Successfully");
        }
       
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
        //
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
        //
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
