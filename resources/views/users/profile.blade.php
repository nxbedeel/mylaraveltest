
        
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
                    <li><a href="/auth/logout">Logout</a></li>
                    <li><a href="/user/changepassword">Change Password</a></li>
                    
                  </ul>
                </div>
              </div>
            </nav>
<div class="content">
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                <div class="title">Welcome <?php echo $user->name; ?></div>
            </div>
@stop
@section('content')
@stop