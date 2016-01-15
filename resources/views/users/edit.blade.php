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


    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id]]) !!}
    <div class="form-group">
         {!! Form::hidden('redirect_url') !!}
         {!! Form::label('name','Name:') !!}         
        <div class="input-group">                        
            {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Enter Name ..']) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        </div>
     </div>
    <div class="form-group">
         {!! Form::submit('Update',['class'=>'btn btn-primary  ']) !!}
         <a href = "{{URL::previous()}}" class = 'btn btn-warning'>Cancel</a>
    </div>
    {!! Form::close() !!}
   
  </div>

@stop
