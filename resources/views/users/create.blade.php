@extends('app')      
@section('pagetitle')
<?php echo "My Image galary Sign up page " ?>
@stop
@section('container')   

    <div class="jumbotron">
    <h1>My First Bootstrap Form</h1>
    <p>This page to use to create new user !</p> 
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
         {!! Form::submit('submit',['class'=>'btn btn-primary  ']) !!}
    </div>
    {!! Form::close() !!}
  </div>
  
@stop
@section('content')
@stop