<div class="product">

	<div class="row">
		
		<div class="col-md-12">
			
			<span class="product-cap">Our <span class="bold">Products</span> </span>
			<p class="margin-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in odio dui. Pellentesque ut ex nec purus hendrerit efficitur ut a metus. Nulla faucibus est in finibus consectetur. </p>

			<div class="row margin-top-40">
				
				<div class="col-md-3 left-menu">
					
					<div class="vertical-menu">
					  <a href="#" class="active">Savings</a>
					  <a href="#">Early Cash</a>
					  <a href="#">Children</a>
					  <a href="#">Retirement</a>
					</div>

				</div>

				<div class="col-md-6 mid-menu">
					
					<div class="sanchay-div">
						
						<span class="sanchay-cap">Sanchay</span>
						<p class="margin-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>  Quisque in odio dui. Pellentesque ut ex nec purus hendrerit efficitur ut a metus. Nulla faucibus est in finibus consectetur. </p>

						<a href="" class="details">Details ></a> <br>

						<div class="margin-top-40">
							
							<span>Calculate Premium</span>
							<a type="button" class="btn appoinment-btn" data-toggle="modal" data-target="#appoinmentModal">Book an Appoinment</a>

						</div>

					</div>

				</div>


				<div class="col-md-3 right-menu">
					
					<img src="http://placeimg.com/640/320/nature/grayscale" class="img-responsive">

				</div>

			</div>

		</div>


		<div class="view-all-btn-div">
			<button type="button" class="btn view-all-btn">View all</button>
			
		</div>


	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="appoinmentModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Appoinment</h4>
        </div>
        <form method="post" action="{{ route('appoinment') }}" >
	        
	        <div class="modal-body">
	          
			    @csrf
				
				Name: <input type="text" name="name">
				Email: <input type="email" name="email">
	        </div>

	        <div class="modal-footer">
	          <button type="submit" class="btn btn-success">Send</button>
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>

		</form>
      </div>
      
    </div>
</div>