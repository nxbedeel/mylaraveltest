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
<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#">Image gallery</a>
                </div>
                <div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/auth/logout">logout</a></li>
                  </ul>
                </div>
              </div>
            </nav>
<div class="content">
                <div class="title">Welcome <?php echo $user->name; ?></div>
            </div>
@stop
@section('content')
@stop