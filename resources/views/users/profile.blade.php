@extends('app')      
@section('pagetitle')
<?php echo "My User List page " ?>
@stop
@section('container')   
<h1>Welcome <span style="color: brown"><?php echo $user->name; ?></span></h1>
@stop
@section('content')
@stop