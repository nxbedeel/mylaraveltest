@extends('app')      
@section('pagetitle')
<?php echo "My User List page " ?>
@stop
@section('container')   
<?php

foreach ($users as $user) {
    echo "<br>".$user->name;
}
?>  
@stop
@section('content')
@stop