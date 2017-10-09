

	

   @extends('pages.master')

   @section('title', '| Contact Us')

   @section('body')


	
	<!-- Banner -->
	<div class="single-slider slider-screen nrbop bg-black-alfa-40 " style="background-image: url(assets/img/slides/slide2.jpg); height: 250px;">

		<div class="container">

			<div class="parallax-mask"></div>
			<div class="section-name">
				
			</div>
		</div>
	</div>
	
	
	
	<!-- contact wrapper -->
	<div class="contact-page-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-sm-4 widget">
							<h4>Adress</h4>
							<i class="fa fa-map-marker"></i>
							<p>Adress no. 29, Some Street, Some Country</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>Phone</h4>
							<i class="fa fa-phone"></i>
							<p>+1 773 392 0614</p>
							<p>+44 752 345 876</p>
						</div>
						<div class="col-sm-4 widget">
							<h4>E-mail</h4>
							<i class="fa fa-envelope"></i>
							<p>thehappypeopleproject@gmail.com</p>
							<p>support@thehappypeopleproject.org</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="comment-form-wrapper contact-from clearfix">
						<div class="widget-title ">
							<h4>Say Hello to Us</h4>
							<p>We are always happpy to partner with you in building lives and communities everyday</p>
						</div>
						<form class="comment-form row altered">
							<div class="field col-sm-4">
								<h4>Name</h4>
								<input type="text" name="first-name">
							</div>
							<div class="field col-sm-4">
								<h4>E-mail</h4>
								<input type="text" name="last-name">
							</div>
							<div class="field col-sm-4">
								<h4>Subject</h4>
								<input type="email" name="first-name">
							</div>
							<div class="field col-sm-12">
								<h4>Message</h4>
								<textarea name="message"></textarea>
							</div>
							<div class="field col-sm-4">
								<button class="btn btn-big btn-solid"><i class="fa fa-paper-plane"></i><span>Send Message</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
   <div class="contact-map-area">
		<div class="map-area" >

			<div id="map"></div>

		</div>
	</div>	


    
	@endsection