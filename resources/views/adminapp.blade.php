<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('pagetitle')</title>

    <!-- Bootstrap Core CSS -->
 <link href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

 
    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet" type="text/css" >
    
    <!-- Timeline CSS -->
    <link href="{{ asset('admin/dist/css/timeline.css') }}" rel="stylesheet" type="text/css" >
    
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/sb-admin-2.css') }}" rel="stylesheet" type="text/css" >

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/bower_components/morrisjs/morris.css') }}" rel="stylesheet" type="text/css" >
       
    <!-- Custom Fonts -->
    <link href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      @include('admin._menu')

        <div id="page-wrapper">
             @yield('content')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

   
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/dist/js/sb-admin-2.js') }}"></script>
    
    
    
</body>

</html>

