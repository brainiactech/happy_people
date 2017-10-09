
@extends('pages.master')

@section('title', '| Gallery')

@section('body')


	<!-- Banner -->
	<div  class="single-slider slider-screen nrbop bg-black-alfa-40 " style="background-image: url(assets/img/slides/slide2.png); height: 250px;">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				
			</div>
		</div>
	</div>
	
	
	<!-- Causes Wrapper -->
	<div class="gallery-areas">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="gallery-wrapper clearfix">
						<div class="nivo-activator"></div>
						<div class="gallery-image width-50">
							<div class="image two">
								<a href="assets/img/lightbox/img-14.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img class="img-responsive" src="assets/img/mini/img-13.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="gallery-image width-25 ">
							<div class="image two">
								<a href="assets/img/lightbox/img-15.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img class="img-responsive" src="assets/img/mini/img-14.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="gallery-image width-25">
							<div class="image two">
								<a href="assets/img/lightbox/img-16.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img class="img-responsive" src="assets/img/mini/img-15.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="gallery-image width-25">
							<div class="image two">
								<a href="assets/img/lightbox/img-17.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img class="img-responsive" src="assets/img/mini/img-16.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="gallery-image width-25">
							<div class="image two">
								<a href="assets/img/lightbox/img-18.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img src="assets/img/mini/img-17.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="gallery-image width-50">
							<div class="image two">
								<a href="assets/img/lightbox/img-19.jpg" class="nivo-trigger" data-lightbox-gallery="gallery1">
									<span><i class="fa fa-arrows-alt"></i></span>
									<img src="assets/img/mini/img-18.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection