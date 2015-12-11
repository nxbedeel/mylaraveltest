
        
@extends('adminapp')      
@section('pagetitle')
<?php echo "My Profile Page " ?>
@stop
@section('content')  
<div class="content">
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
      <div class="container">
      <div class="row">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3 class="text-uppercase">{{ $user->name }}</h3>
        <em>click here  to change profile image</em>
		</center>
              <div class="row">
                
                <div> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                      </tr>
                      <tr>
                        <td>Member Since</td>
                        <td>{{ $user->created_at }}</td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  <a href="#" class="btn btn-primary">Edit Profile</a>
                  <a href="#" class="btn btn-primary">My Public Pictures</a>
                  <a href="#" class="btn btn-primary">My Private Pictures</a>
                </div>
              </div>
            </div>

      </div>
    </div>
            
@stop
@section('content')
@stop