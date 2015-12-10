<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

    /*
    |--------------------------------------------------------------------------
    |Define Basic routing Rule for ID and Name 
    |--------------------------------------------------------------------------
    |
    | 1. Define Rule for id
    | 2. Define Global Rule for Name 
    */
$router->pattern('id', '[0-9]+');
$router->pattern('name', '[A-Za-z]+');
/*
|--------------------------------------------------------------------------
| Application Default Route
|--------------------------------------------------------------------------
|
| Here is we register basic default/ root route  of the application 
|
*/
//Route::get('/','WelcomeController@index' );
/*
|--------------------------------------------------------------------------
| Route to contcat with Diffetent ways   using GET
|--------------------------------------------------------------------------
|
| 1. IF user will enter valid name in url i.e localhost.dev/contact/adeel then move to contact action/mathod of the Welcome controller  
|    and pass user entered name to veiw and we will display this name in veiw 
| 2. IF suer will enter valid url i.e localhost.dev/contact/adeel then move to contact action/mathod of the Welcome controller
| 3. if user will give any digit in url then it will give Invalid username error and display user id in screen 
*/
Route::get('/contact/{name}','WelcomeController@contact' );
Route::get('/contact','WelcomeController@contact' );
Route::get('/contact/{id}', function($id)
{
    return "Invalid Username :".$id;
});

//Route::get('/','WelcomeController@index' );
/*
|--------------------------------------------------------------------------
| Route to About  with Diffetent ways   using GET
|--------------------------------------------------------------------------
|
| 1. IF user will enter valid name and id  in url i.e localhost.dev/about/12/adeel then move to about action/mathod of the Admin controller  
|    and pass user entered name to veiw and we will display this name in veiw  
 2.  IF any username of id is missing then it will give error respectively  
*/

Route::get('/about/{id}/{name}','AdminController@about' );

Route::get('/about/{name}', function($name)
{
    return "User ID is missing  for user :".$name;
});
Route::get('/about', function()
{
    return "User Name And ID is missing  :";
});
Route::get('/signup/','UsersController@create' );

Route::get('/confirm/','UsersController@confirm' );
Route::post('/signup/','UsersController@store' );
Route::post('/confirm/','UsersController@confirmcode' );
Route::get('/listuser/','UsersController@show' );
Route::get('/listuser/','UsersController@show' );
Route::get('/registrationsuccess/','UsersController@registrationsuccess' );
Route::group(['middleware' => 'before:true'], function () {
   Route::get('/about/{id}/{name}','AdminController@about' );
});
Route::group(['middleware' => 'auth'], function () {
  Route::get('/profile','UsersController@profile' );
  Route::get('/home','UsersController@profile' );
  Route::get('/user/changepassword','UsersController@changepassword' );
  Route::post('/user/changepassword','UsersController@postchangepassword' );
});
post('auth/login', array('as' => 'login', 'uses' => 'Auth\AuthController@authenticate'));
Route::Controllers([
        
       'auth'=> 'Auth\AuthController',
       'password'=> 'Auth\PasswordController',
        
]);
