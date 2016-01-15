@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Image setting</h1>
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


    {!! Form::model($setting, ['method' => 'POST']) !!}
    <div class="form-group">
         {!! Form::label('size_allow','Image Size(In KB):') !!}         
        <div class="input-group">                        
            {!! Form::text('size_allow',null,['class'=>'form-control','required','placeholder'=>'Enter Size ..']) !!}
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        </div>
     </div>
       <div class="form-group">
         @foreach ($all_types as $c)
           <div class="input-group">   
               @if (count($setting) > 0)
                 {!! Form::checkbox('typeallow[]', $c, in_array($c, $setting->types)) !!}{!! strtoupper($c) !!}
               @else
                 {!! Form::checkbox('typeallow[]', $c) !!}{!! strtoupper($c) !!}
               @endif
           </div>
         @endforeach
  
     </div>
    <div class="form-group">
         {!! Form::submit('Update',['class'=>'btn btn-primary  ']) !!}
         <a href = "{{URL::previous()}}" class = 'btn btn-warning'>Cancel</a>
    </div>
    {!! Form::close() !!}
   
  </div>

@stop
