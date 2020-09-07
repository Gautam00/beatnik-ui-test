<div class="daily-essential">

	<div class="well">

		<p>DAILY ESSENTIAL</p>

		<!-- Carousel
		================================================== -->            
	    <div id="dailyEssentialCarousel" class="carousel slide">
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
			                          <img class="" src="http://placeimg.com/640/320/nature/grayscale" alt="Slide">	

			                          	<div class="product-label">
			                          		Product Label <br>
			                          		<a href="">Shop Now ></a>

			                          	</div>
			                        </div>        
			                    </div>

		                	@endfor

		                </div>
		            </div>
	        		
	        	@endfor

	        </div>
	        <a class="left carousel-control" href="#dailyEssentialCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
	        <a class="right carousel-control" href="#dailyEssentialCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
	        
              
	    </div><!-- End Carousel --> 

	</div><!-- End Well -->

</div>