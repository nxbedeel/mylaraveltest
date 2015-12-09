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
    <h1>Register User</h1>
    <p>Sign up page !</p> 
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
         {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('email','Email:') !!}
         {!! Form::text('email',null,['class'=>'form-control','Enter  your Email Address ..']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('password','Password:') !!}
         {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
         {!! Form::label('password_confirmation','Confirm Password:') !!}
         {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
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