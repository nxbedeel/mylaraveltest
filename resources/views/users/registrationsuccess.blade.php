<style>
 
            .title {
                font-size: 96px;
            }
        </style>
        
@extends('app')      
@section('pagetitle')
<?php echo "My User List page " ?>
@stop
@section('container')  
<div class="container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Image gallery</a>
                </div>
                <div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/auth/login">login</a></li>
                     <li><a href="/signup">Register</a></li>
                  </ul>
                </div>
              </div>
            </nav>
              
            <div class="content">
                <div class="title">User created successfully</div>
                <p><a href="/auth/login"> click here to login</a></p>
            </div>
        </div>


@stop
@section('content')
@stop