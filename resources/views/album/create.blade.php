@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Create New Album</h1>
                     
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
    {!! Form::open(array( 'files' => true)) !!}
    
    <div class="form-group">
         {!! Form::label('name','Name:') !!}         
        <div class="input-group">                        
            {!! Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Enter Name ..']) !!}
            <span class="input-group-addon"></span>
        </div>
    <div class="form-group">
         {!! Form::label('description','Description:') !!}
          <div class="input-group">  
           
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
          </div>
    </div>
     <div class="form-group">
         {!! Form::label('albumtype_id','Select Type:') !!}
          <div class="input-group">  
           
          {!! Form::select('albumtype_id', $types,null, ['class' => 'form-control'],'required') !!}
          </div>
    </div>    
          <div class="form-group">
                {!! Form::label('Product Image') !!}
               <div class="input-group">  
                 {!! Form::file('photo', null) !!}
               </div>
            </div>  

         
     <div class="form-group">
         {!! Form::submit('Create',['class'=>'btn btn-primary  ']) !!}
         <a href = "{{URL::previous()}}" class = 'btn btn-warning'>Cancel</a>
    </div>     
    {!! Form::close() !!}
  
  </div>

@stop
@section('content')
@stop