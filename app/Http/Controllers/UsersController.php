<?php


namespace App\Http\Controllers;

use Session;
use App\User;
use Mail;
use Auth;
use Hash;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use App\Http\Requests\CreateUser;
use App\Http\Requests\ConfirmUser;
use App\Http\Requests\ChangePassword;
//use App\Http\Requests\User;

use Illuminate\Validation;
use Request;
//use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct(){
        $this->middleware('auth'); 
    }
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
        return view('users.create');
    }
    public function changepassword()
    {
        //
        return view('users.changepassword');
    }
    public function postchangepassword()
    {
        //
          $input = Request::all();
         $validator = Validator::make($input, [
            'oldpassword' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ]);

      
        $userDate = Auth::user();
        $data = User::get()->where('id', $userDate->id)->first();
        
         $auth = \Auth::attempt( array(
            'email' => $data->email,
            'password' => $input['oldpassword']   
            )); //, $remember
        if($auth) {
           $data->password = Hash::make($input['password']);
            $data->save();
            
           return redirect('/dashboard')->with('status', "Password Changed Successfully");
        } else {
            $validator->errors()->add('code', 'password not match with old!');
            return redirect('/user/changepassword')
                        ->withErrors($validator)
                        ->withInput();
        }
        
    }
    public function registrationsuccess()
    {
        //
        return view('users.registrationsuccess');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUser $request)
    {
        //
        $input = $request->all();
        $input['user_type'] = 'Client';
        $input['remember_token'] = base64_encode($input['email']);
        $input['password'] = Hash::make($input['password']);
      
       try {
          // ...
             $user = User::create($input);
             $insertedId = $user->id;

            // send email
             Mail::send('emails.welcomemsg', ['user' => $user], function ($m) use ($user) {
                 $m->from('adeel.islam@nxb.com.pk', 'Your Application');
                 $m->to($user->email, $user->name)->subject('Your Reminder!');
             });
             return redirect('/confirm');

        } catch ( \Illuminate\Database\QueryException $e) {
          
            $mesg = "Insertion Fail";exit;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type='')
    {
        //
        $data = array();
        if($type =='active'){
            $data = User::where('status',1)->get();
        }elseif($type =='inactive'){
            $data = User::where('status',0)->get();
        }else{
            $data = User::get();
        }
      //  $data = User::get();
        return view('users.list', ['users' => $data]);
       // $users = User->get();
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
        $data = User::find($id);
         return view('users.edit', ['user' => $data]);
    }
   
    public function confirm()
    {
        //
        return view('users.confirm');
    }
    public function confirmcode()
    {
        $input = Request::all();
        //
        $validator = Validator::make($input, [
            'code' => 'required',
        ]);
        $data = User::get()->where('remember_token', $input['code'])->first();
        
        if (!$data) {
            $validator->errors()->add('code', 'Invalid code entered!');
            return redirect('/confirm')
                        ->withErrors($validator)
                        ->withInput();
        }  else {
            $data->status = 1;
            $data->save();
            
//            Session::put('userinfo', $data);
            return redirect('/auth/login')->with('status', "User is created  successfully please login here and get startes ");
            //exit ("validated successfully");
        }
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
    public function profile()
    {
        //
          $value = Auth::user();
          return view('users.profile', ['user' => $value]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isdelete  = User::where('id', $id)->delete();
        //if($isdelete){
            return redirect('/user/list')->with('status', "User Removed  Successfully");
       // }
        
        //
    }
    
    public function changestatus($cstatus='',$id='')
    {
//      /  exit ($id);
        $data = User::find($id);
//        var_dump($data);
//                exit ();
        if($cstatus=='Inactive'){
            $data->status = 0;
            $data->save();
            return redirect('/user/list')->with('status', "Status Changed  Successfully");
        }elseif($cstatus=='Active'){
            $data->status = 1;
            $data->save();
            return redirect('/user/list')->with('status', "Status Changed  Successfully");
        }
        
    }
    
}
