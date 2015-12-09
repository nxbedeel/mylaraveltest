@extends('app')      
@section('pagetitle')
<?php echo "Welcome to Login  page " ?>
@stop
@section('container')  
  <div class="jumbotron">
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
         {!! Form::label('email','Email:',['class'=>'fcontrol-label col-sm-2']) !!}
         <div class="col-sm-10">
             {!! Form::text('email',null,['class'=>'form-control','Enter  your Email Address ..']) !!}
         </div>
    </div>
    <div class="form-group">
         {!! Form::label('password','Password:',['class'=>'fcontrol-label col-sm-2']) !!}
         <div class="col-sm-10">
            {!! Form::password('password',['class'=>'form-control']) !!}
         </div>
    </div>
    
    <div class="form-group">
         {!! Form::submit('submit',['class'=>'btn btn-primary  ']) !!}
    </div>
    {!! Form::close() !!}
    <p><a href="/signup">New User ? click here to register</a></p>
  </div>
@stop
@section('content')
@stop