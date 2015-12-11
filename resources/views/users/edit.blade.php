@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit  User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
         {!! Form::submit('submit',['class'=>'btn btn-primary  ']) !!}
    </div>
    {!! Form::close() !!}
   
  </div>

@stop
