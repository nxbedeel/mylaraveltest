@extends('app')
@section('pagetitle')
    NextBridge Photo Gallery -- Upload Images
@stop
@section('content')
<script src="{{ asset('moderna/js/jquery.js') }}"></script>
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
		<!-- end divider -->
                <!-- Portfolio images -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Album Images</h4>
                                
                                <div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
                                  
                                                   @foreach ($albumimages as $image)
                                                    <li class="col-lg-3 design" data-type="web">
                                                        <div class="item-thumbs">
                                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $image->title }}" href="{{ asset($image->url) }}">
                                                        <span class="overlay-img"></span>
                                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                                        </a>
                                                        <!-- Thumb Image and Description -->
                                                        
                                                        <img src="{{ asset($image->thumb_url) }}" alt="{{ $image->title }}"  height="42" width="42">
                                                      
                                                        </div>
                                                        
                                                    </li>
                                                @endforeach

					</ul>
                                          
					</section>
				</div>
                                <div class="row">
                                     {!! $albumimages->render() !!}
                                </div>

			</div>
		</div>
		

	</div>
	</section>
@stop
@section('content')
@stop
