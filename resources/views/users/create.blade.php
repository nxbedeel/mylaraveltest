@extends('app')      
@section('pagetitle')
<?php echo "My Image galary Sign up page " ?>
@stop
@section('container')   
 <nav class="navbar navbar-default">
        <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Image gallery</a>
                </div>
                <div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/auth/login">login</a></li>
                  </ul>
                </div>
              </div>
            </nav>
    <div class="jumbotron">
    <h2 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    Register User
  </h2>
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
         {!! Form::label('name','Name:') !!}         
        <div class="input-group">                        
            {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Enter Name ..']) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        </div>
    <div class="form-group">
         {!! Form::label('email','Email:') !!}
          <div class="input-group">  
             {!! Form::text('email',null,['class'=>'form-control','required','placeholder'=>'Enter  your Email Address ..']) !!}
             <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
          </div>
    </div>
    <div class="form-group">
         {!! Form::label('password','Password:') !!}
         <div class="input-group">  
             {!! Form::password('password',['class'=>'form-control']) !!}
             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         </div>
    </div>
    <div class="form-group">
         {!! Form::label('password_confirmation','Confirm Password:') !!}
         <div class="input-group"> 
             {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
             <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
         </div>
    </div>
    <div class="form-group">
         {!! Form::submit('submit',['class'=>'btn btn-primary  ']) !!}
    </div>
    {!! Form::close() !!}
    <p><a href="/auth/login">Already registred ? click here </a></p>
  </div>

@stop
@section('content')
@stop