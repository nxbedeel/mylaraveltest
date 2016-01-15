<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
                                  
                                                   @foreach ($albums as $album)
                                                    <li class="col-lg-3 design" data-type="web">
                                                        <div class="item-thumbs">
                                                        <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $album->name }}" href="/images/listalbumimages/{{ $album->id }}">
                                                           
                                                        <span class="overlay-img"></span>
                                                         
                                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                                        </a>
                                                        <!-- Thumb Image and Description -->
                                                        
                                                        <img src="{{ asset($album->thumb_url) }}" alt="{{ $album->name }}" >
                                                        </div>
                                                    </li>
                                                @endforeach

					</ul>
					</section>
				</div>