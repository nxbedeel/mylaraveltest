<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(){
        return view('welcome');
    }
    public function contact($name=""){
       // exit ($name);
        /*
|--------------------------------------------------------------------------
| Pass data to contact view 
|--------------------------------------------------------------------------
|
| 1. it will pass user entered name to view 
*/
        
        return view('welcome.contact')->with(['name'=>  ucfirst($name)]);
    }
}
?>
