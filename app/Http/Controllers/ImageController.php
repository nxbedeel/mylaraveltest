<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\ImageSetting;
use Auth;
use App\User;
use Response;
use App\AlbumTypes;
use App\Album;
use App\Images;
use File;
use Intervention\Image\ImageManager;
use Image;
use Gate;
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
        if($setting){
            $setting['types'] = explode(",",  $setting['type_allow']);   
        }
         
         $all_types = ['jpg','png','gif'];
         return view('image.imagesetting', ['setting' => $setting])->with('all_types', $all_types);
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
            return redirect('/dashboard')->with('status', "Setting  Updated  Successfully");
        }else{
             $user = ImageSetting::create($input);
             return redirect('/dashboard')->with('status', "Setting Updated  Successfully");
        }
       
    }
    /**
     * Display the album selected images 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listalbumimages($id='')
    {
        //
         
       if($id !=''){
            $userDate = Auth::user();
            $data = Images::leftJoin('albums', 'images.album_id', '=', 'albums.id')
                     ->leftJoin('users', 'images.user_id', '=', 'users.id')
                    ->where('images.album_id', '=', $id)
                ->select('images.*', 'albums.name as albumname', 'users.name as username')
                ->paginate(4);
            return view('image.listalbum', ['albumimages' => $data]);
            
        }
        

    }
    /**
     * Display the images list.
     *
     * @param  int  $type
     * @return \Illuminate\Http\Response
     */
    public function listimages($type='')
    {
        //
         
        if(strtolower($type)=='all'){
            
            //$data = Images::get();
             $data = Images::leftJoin('albums', 'images.album_id', '=', 'albums.id')
                     ->leftJoin('users', 'images.user_id', '=', 'users.id')
                ->select('images.*', 'albums.name as albumname', 'users.name as username')
                ->get();
       //dd($data);
            return view('image.list', ['albumtype' => $data])->with('type', ucfirst($type));
            
        }elseif(strtolower($type)=='my'){
            $userDate = Auth::user();
            $data = Images::leftJoin('albums', 'images.album_id', '=', 'albums.id')
                     ->leftJoin('users', 'images.user_id', '=', 'users.id')
                    ->where('users.id', '=', $userDate->id)
                ->select('images.*', 'albums.name as albumname', 'users.name as username')
                ->get();
            return view('image.list', ['albumtype' => $data])->with('type', ucfirst($type));
            
        }else{
         return redirect('/dashboard')->withErrors("Invalid URL Entered");
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
     * upload images.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        //
        $data = Album::lists('name', 'id');
        return view('image.upload', ['types' => $data]);
 
    }
    
    public function uploadimages(\Request $request){
        
      // Images destination
        $img_dir = "uploads/images";
        $img_thumb_dir = $img_dir . "/thumbs/";
        // create an image manager instance with favored driver
        $manager = new ImageManager(array('driver' => 'imagick'));
        // Create folders if they don't exist
        if (!file_exists($img_dir)) {
            mkdir($img_dir, 0777, true);
           
        }
// Create Thumbnail folders if they don't exist
        if (!file_exists($img_thumb_dir)) {
            mkdir($img_thumb_dir, 0777, true);
           
        }
         
        $img = Request::file('file');
        $input = Request::all();
        $imagedata = array();
       // Upload the image in the correct destination
       $userDate = Auth::user();
       
        $filename = md5(microtime() . $img->getClientOriginalName()) . "." . $img->getClientOriginalExtension();
         $upload_success = $img->move($img_dir, $filename);
        // create new Intervention Image
         Image::make($img_dir."/".$filename)->resize(200, 200)->save($img_thumb_dir.$filename);
         // create new Intervention Image
        $imagedata['name'] = $filename;
        $imagedata['url'] = url().'/uploads/images/'.$filename;
        $imagedata['thumb_url'] = $img_thumb_dir.$filename;
        $imagedata['size'] = $filename;
        $imagedata['title'] = $input['filetitle'];
        $imagedata['status'] = $input['filestatus'];
        $imagedata['album_id'] = $input['album_id'];
        $imagedata['user_id'] = $userDate->id;
       // exit( var_dump($imagedata));
        $user = Images::create($imagedata);
        $filedata['name'] = $filename;
        $filedata['url'] = url().'/uploads/images/'.$filename;
        $filedata['thumbnailUrl'] = url().'/uploads/images/'.$filename;
        $filedata['deleteType'] =  "GET";
        $filedata['deleteUrl'] =  url()."/images/destroy/".$user->id;        
        $channels[] = $filedata;
        $response = Response::json(array("files"=>$channels));
        return $response;
    }
    public function pupload(\Request $request){
        
      // Images destination
        $img_dir = "uploads/images";
        $img_thumb_dir = $img_dir . "/thumbs";

        // Create folders if they don't exist
        if (!file_exists($img_dir)) {
            mkdir($img_dir, 0777, true);
            mkdir($img_thumb_dir, 0777, true);
        }

        $img = Request::file('file');
       // Upload the image in the correct destination
       
        $filename = md5(microtime() . $img->getClientOriginalName()) . "." . $img->getClientOriginalExtension();
        $upload_success = $img->move($img_dir, $filename);
        $filedata['name'] = $filename;
        $filedata['url'] = url().'/uploads/images/'.$filename;
        $filedata['thumbnailUrl'] = url().'/uploads/images/'.$filename;
        $filedata['deleteType'] =  "GET";
        $filedata['deleteUrl'] =  url()."/images/destroy/1";
        
        $userDate = Auth::user();
        
        $data = User::get()->where('id', $userDate->id)->first();
        $data->profile_image = $filename;
        $data->save();
        $channels = array();
        $channels[] = $filedata;
        $response = Response::json(array("files"=>$channels));
        return $response;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$type='')
    {
        //
     
         $data =  Images::find($id);
         if(Gate::denies('delete',$data)){
             abort(403, "You have no rights to do this ");
         }else{
            File::delete(public_path()."\uploads\images\\".$data->name);
            $isdelete  = $data->delete();
            if($type==''){
               $response = Response::json(array("files"=>"Success"));         
               return $response;    
            }else{

                 return redirect('/images/list/'.$type)->with('status', "File Removed  Successfully");
            }
         }
         
         
               
    }
}
