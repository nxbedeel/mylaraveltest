<?php
/*
|--------------------------------------------------------------------------
| Display data in view 
|--------------------------------------------------------------------------
|
| 1. created app.blade
| 2. Enter data in title section of master template
| 3. Enter data in contact section of master template
| 4. Enter data in container section of master template
| 5. Use if ocndition to display data
*/
?>

@extends('app')      
@section('pagetitle')
<?php echo "Confirmation Required " ?>
@stop
@section('container')   
<div class="jumbotron">
    <h1>Confirmation Required </h1>    
    <p>Check you email address for confirmation code  and enter below to Activate account.</p>
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
         {!! Form::label('code','Confirm Code:') !!}
         {!! Form::text('code',null,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
         {!! Form::submit('submit',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@stop
