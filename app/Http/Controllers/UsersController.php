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
//             Mail::send('emails.welcomemsg', ['user' => $user], function ($m) use ($user) {
//                 $m->from('adeel.islam@nxb.com.pk', 'Your Application');
//                 $m->to($user->email, $user->name)->subject('Your Reminder!');
//             });
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
    public function show()
    {
        //exit("i am at show");
        //
        $data = User::get();
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
            return redirect('/registrationsuccess');
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
       // var_dump($value);exit;
   //     if($value){
          return view('users.profile', ['user' => $value]);
//        }else{
//           return redirect('/');
//        }
        
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
