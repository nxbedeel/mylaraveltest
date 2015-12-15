
        
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
        <!-- The file upload form used as target for the file upload widget -->
     <form id="fileupload" action="/users/pupload" method="POST" enctype="multipart/form-data">
<!--    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">-->
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
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