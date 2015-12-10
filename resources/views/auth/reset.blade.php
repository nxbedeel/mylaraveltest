@extends('app')      
@section('pagetitle')
<?php echo "Welcome to reset password  page " ?>
@stop
@section('container')  
<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              
              <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user">
    </i>   Reset Password</h4>
              
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
 
              {!! Form::open() !!}


              {!! Form::hidden('token', $token) !!}
              <div class="form-group">
                     {!! Form::label('email','Email:',['class'=>'fcontrol-label col-sm-2']) !!}
                     <div class="input-group">  
                         {!! Form::text('email',null,['class'=>'form-control','required','autofocus','placeholder'=>'Enter  your Email Address ..']) !!}
                         <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      </div>
                </div>
<!--                   <div class="form-group">
                         
                         

                         <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>-->
                   <div class="form-group">
                         {!! Form::label('password','Password:',['class'=>'fcontrol-label col-sm-2']) !!}
                         <div class="input-group">  
                             {!! Form::password('password',['class'=>'form-control']) !!}
                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                         </div>
                    </div>
                    <div class="form-group">
                         {!! Form::label('password_confirmation','Confirm Password:',['class'=>'fcontrol-label col-sm-2']) !!}
                         <div class="input-group"> 
                             {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                         </div>
                    </div>
                    <div class="form-group">
                         {!! Form::submit('Reset Password',['class'=>'btn btn-lg btn-primary btn-block']) !!}
                    </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  
@stop
@section('content')
@stop