<div class="bestseller">
	
	<div class="row">
		
		<div class="col-md-7"><h4 class="bestseller-h3-tag">Bestsellers</h4></div>
		<div class="col-md-5"><a class="bestseller-view-all" href="{{ url('/') }}">View all ></a></div>

	</div>

	<div class="well">
		<!-- Carousel
		================================================== -->            
	    <div id="myCarousel" class="carousel slide">
	        <div class="carousel-inner">
	            

	        	@for ($i = 0; $i < 3; $i++)

	        		<div @if ($i == 0)
	        			class="item active" 
	        		@else 
	        			class="item" 
	        		@endif>
		                <div class="row">
		                	@for ($j = 0; $j < 4; $j++)
		                		
		                		<div class="col-md-3">
			                        <div class="thumbnail">
			                          <img class="bestseller-image" src="http://placeimg.com/640/320/nature/grayscale" alt="Slide">
			                          <div class="middle">
									    <button class="text">Wishlist</button>
									  </div>
			                          <div class="caption">
			                            <h5 class="bold text-align-center">Product label</h5>
			                            <p class="text-align-center" > Lorem ipsum dolor sit</p>
			                            <p class="bold text-align-center">Rs. {{ rand(100,1000) }}</p>
			                          </div>
			                        </div>        
			                    </div>

		                	@endfor

		                </div>
		            </div>
	        		
	        	@endfor

	        </div>
	        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
	        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
	                       
	    </div><!-- End Carousel --> 

	</div><!-- End Well -->

</div>