<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
                                  
                                                   @foreach ($recent as $image)
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