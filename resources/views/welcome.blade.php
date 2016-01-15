<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> Its All  About NextBridge </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<script src="{{ asset('moderna/css/bootstrap.min.css') }}"></script>
<link href="{{ asset('moderna/css/bootstrap.min.css') }}" rel="stylesheet" />
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
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                            <!-- Slider -->
                            @include('_slider')
                            <!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h2><span>NextBridge</span> Photo Gallery </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
             		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Albums</h4>
				@include('_album')
			</div>
		</div>   
                
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Uploads</h4>
				@include('_recent')
			</div>
		</div>

	</div>
	</section>
	@include('_footer')
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('moderna/js/jquery.js') }}"></script>
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
</html>