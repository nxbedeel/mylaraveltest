<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
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
    public function about($id='',$name='')
    {
        
    /*
    |--------------------------------------------------------------------------
    |Pass parameters to view 
    |--------------------------------------------------------------------------
    |
    | 1.In this section i have added logic to get data from url and then pass it to view 
    | 2. Pass three  arrays to  view 
    | 3. pas an assosiative at to and display data using foreach 
    |
    */
        
        $data = ["Azeem","Furqan","Fahad","Haroon","Babar","Solat","Imran"];
        $skills = ["java","c#","PHP","laravel","HTML","CSS","EXTjs"];
        $bookforlanguage = ['book'=>'PHP','subject'=>'C#'];
        return view('admin.about',  compact('data','skills','bookforlanguage'))->with(['id'=>$id,'lname'=>'Islam','fname'=>'Muhammad Adeel ']);
     //   return view('admin.about',$data)->with(['id'=>$id],['name'=>$name]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //
        
         $usercount = User::all()->count();
         $activecount = User::where('status', '=', 1)->count();
        return view('admin.dashboard')->with(['usercount'=>$usercount,'activeuser'=>$activecount,'fname'=>'Muhammad Adeel ']);;
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
