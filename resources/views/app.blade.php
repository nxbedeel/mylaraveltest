<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> @yield('pagetitle')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />

<!-- css -->

<link href="{{ asset('moderna/css/bootstrap.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link href="{{ asset('moderna/css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('moderna/css/jcarousel.css') }}" rel="stylesheet" />
<link href="{{ asset('moderna/css/flexslider.css') }}" rel="stylesheet" />
<link href="{{ asset('moderna/css/style.css') }}" rel="stylesheet" />


<!-- Theme skin -->
<link href="{{ asset('moderna/skins/default.css') }}" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">

                @include('_menu')
               
            </div>
        </div>
<div class="container">
  @yield('container')
   <div class="content" >
        @yield('content')
    </div>
</div>
   
  @include('_footer')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="{{ asset('moderna/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('moderna/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('moderna/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('moderna/js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('moderna/js/google-code-prettify/prettify.js') }}"></script>
<script src="{{ asset('moderna/js/portfolio/jquery.quicksand.js') }}"></script>
<script src="{{ asset('moderna/js/portfolio/setting.js') }}"></script>
<script src="{{ asset('moderna/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('moderna/js/animate.js') }}"></script>
<script src="{{ asset('moderna/js/custom.js') }}"></script>
</body>
</body>
</html>