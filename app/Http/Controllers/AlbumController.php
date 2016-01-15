<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\ImageSetting;
use App\AlbumTypes;
use App\Album;
use Intervention\Image\ImageManager;
use Image;

class AlbumController extends Controller
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
        // return view('album.create');
        $data = AlbumTypes::lists('name', 'id');
          return view('album.create', ['types' => $data]);
    }
    /**
     * Show the form for creating a new album type.
     *
     * @return \Illuminate\Http\Response
     */
    public function createType()
    {
        //
        return view('album.createtype');
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
        
        $img_dir = "uploads/album/";
        $img_thumb_dir = $img_dir . "/thumbs/";
        // create an image manager instance with favored driver
        //$manager = new ImageManager(array('driver' => 'imagick'));
        // Create folders if they don't exist
        if (!file_exists($img_dir)) {
            mkdir($img_dir, 0777, true);
           
        }
// Create Thumbnail folders if they don't exist
        if (!file_exists($img_thumb_dir)) {
            mkdir($img_thumb_dir, 0777, true);
           
        }
         if (Request::hasFile('photo')){
            $img = Request::file('photo');
            $filename = md5(microtime() . $img->getClientOriginalName()) . "." . $img->getClientOriginalExtension();
            $upload_success = $img->move($img_dir, $filename);
            // resizing an uploaded file
            Image::make($img_dir.$filename)->resize(200, 200)->save($img_thumb_dir.$filename);
            $input['image_name'] = $filename;
            $input['url'] = $img_dir.$filename;
            $input['thumb_url'] = $img_thumb_dir.$filename;
        }
        $user = Album::create($input);
        return redirect('/album/list/')->with('status', "Album Created   Successfully");
        
       
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeType()
    {
        //
        $input = Request::all();
        $user = AlbumTypes::create($input);
        return redirect('/albumtype/list/')->with('status', "Album Type Created   Successfully");
        
       
    }
    public function listtype($type='')
    {
        //
        $data = AlbumTypes::get();
        return view('album.listtype', ['albumtype' => $data]);
    
        
    }
    public function listalbum()
    {
        //
        $data = Album::leftJoin('album_types', 'albums.albumtype_id', '=', 'album_types.id')
                ->select('albums.*', 'album_types.name as typename')
                ->get();
        return view('album.list', ['albums' => $data]);

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
     * Show the form for editing the specified Ambum Type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edittype($id)
    {
        $data = AlbumTypes::find($id);
         return view('album.edittype', ['type' => $data]);
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
     * Update the specified Album Type in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatetype(Request $request, $id)
    {
        //
        $data = AlbumTypes::find($id);
         $data->update( Request::all());         
         return redirect('/albumtype/list/')->with('status', "Album Type Updated  Successfully");
    
    }

    /**
     * Remove the specified album from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $isdelete  = Album::where('id', $id)->delete();
        return redirect('/album/list')->with('status', "Album Removed  Successfully");
    }
    
    /**
     * Remove the specified album tye from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyType($id)
    {
        //
        $isdelete  = AlbumTypes::where('id', $id)->delete();
        return redirect('/albumtype/list')->with('status', "Type Removed  Successfully");
    }
}
