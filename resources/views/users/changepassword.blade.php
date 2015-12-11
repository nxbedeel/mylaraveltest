@extends('adminapp')      
@section('pagetitle')
<?php echo "Welcome to Change password  page " ?>
@stop
@section('content')  
<div class="row">
<div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              
              <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user">
    </i>   Change Password</h4>
              
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
                    <div class="form-group">
                         {!! Form::label('oldpassword','Old Password:',['class'=>'fcontrol-label col-sm-2']) !!}
                         <div class="input-group">  
                             {!! Form::password('oldpassword',['class'=>'form-control']) !!}
                             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                         </div>
                    </div>
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
                         {!! Form::submit('Change Password',['class'=>'btn btn-lg btn-primary btn-block']) !!}
                    </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
    </div>
@stop
