
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
| 5. Use if ocndition to display data i.e if skills and books  have some count  only then it will display data
*/
?>
@extends('adminapp')
@section('pagetitle')
    Its All  About user  {{ $fname }} {{ $lname }}
@stop

@section('contant')
   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome {{ $fname }} {{ $lname }}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>
            <!-- /.row -->
@stop

