@extends('app')      
@section('pagetitle')
<?php echo "Welcome  Lost Password  page " ?>
@stop
@section('container')  
   <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Lost Your Password?</h4>
              <p>Please enter your registered  email  here . you will receive reset password link in you email deals,  
                or go back to our <a href="/">main site</a>.</p>
            </div>
          
        <div class="modal-body">
                 @if (count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ session('status') }}
                </div>
@endif 
              {!! Form::open() !!}
                <div class="form-group">
                     {!! Form::label('email','Email:',['class'=>'fcontrol-label col-sm-2']) !!}
                     <div class="input-group">  
                         {!! Form::text('email',null,['class'=>'form-control','required','autofocus','placeholder'=>'Enter  your Email Address ..']) !!}
                         <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('  Send Password Reset Link',['class'=>'btn btn-lg btn-primary btn-block']) !!}

                </div>
            {!! Form::close() !!}
    
        </div> 
      </div> 
   </div>           
@stop
@section('content')
@stop