<div class="diaries">
	
	<div class="row">
		
		<div class="col-md-7"><h4 class="bestseller-h3-tag diaries-caption">#Diaries</h4></div>

	</div>

	<div class="well row">
		<!-- Carousel
		================================================== -->    

		<div class="col-md-1"></div>


	    <div id="diariesCarousel" class="carousel slide col-md-9">
	        <div class="carousel-inner">
	            

	        	@for ($i = 0; $i < 3; $i++)

	        		<div @if ($i == 0)
	        			class="item active" 
	        		@else 
	        			class="item" 
	        		@endif>
		                <div class="row">
		                	
		                		
		                		@for ($j = 0; $j < 3; $j++)
		                		
			                		<div class="col-md-4">
				                        <div class="thumbnail">
				                          <img class="bestseller-image" src="http://placeimg.com/640/320/nature/grayscale" alt="Slide">
				                          <div class="caption">
				                            <h5 class="bold text-align-left">Product label</h5>
				                            <p class="text-align-left" > Lorem ipsum dolor sit</p>
				                          </div>
				                        </div>        
				                    </div>

			                	@endfor

		                	

		                </div>
		            </div>
	        		
	        	@endfor

	        </div>
	        <a class="left carousel-control" href="#diariesCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
	        <a class="right carousel-control" href="#diariesCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
	                       
	    </div><!-- End Carousel --> 

	    <div class="col-md-1"></div>

	</div><!-- End Well -->

</div>