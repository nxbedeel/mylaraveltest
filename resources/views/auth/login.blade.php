@extends('app')      
<style>
    .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>
@section('pagetitle')
<?php echo "Welcome to Login  page " ?>
@stop
@section('container')  
<div class="container">
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <div class="row">
        <!--        <div class="col-sm-6 col-md-4 col-md-offset-4">-->

                    <div class="account-wall">
                         @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (count($errors) > 0)
                        
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <img class="profile-img" src="http://nexthrm.vteamslabs.com/images/nxblog1.png"         alt="">
                            {!! Form::open(array('class'=>'form-signin')) !!}
                             <div class="input-group">  
                                 {!! Form::text('email',null,['class'=>'form-control', 'required','autofocus','placeholder'=>'Email']) !!}
                                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                             </div>
                            
                            <div class="input-group">  
                                 {!! Form::password('password',['class'=>'form-control', 'required ','placeholder'=>'Password']) !!}
                                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                             </div>
                            
                            {!! Form::submit('  Sign in',['class'=>'btn btn-lg btn-primary btn-block']) !!}
                            {!! Form::close() !!}
                        </form>
                       
                        <a href="/password/email" class="text-center new-account">Lost Password? </a>
                    </div>
                    <a href="/signup" class="text-center new-account">Create an account </a>
        <!--        </div>-->
            </div>
          </div>
      </div>
    </div>
              
</div>
@stop
@section('content')
@stop