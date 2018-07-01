@extends('layouts.app')
@section('title', 'HandChicken')
@section('content')
	<!-- slider-container start -->
	<div class="slider-container">
		<!-- Slider Image -->
		<div id="mainSlider" class="nivoSlider slider-image">
			<img src="images/slider/1.jpg" alt="" title="#htmlcaption1"/>
			<img src="images/slider/2.jpg" alt="" title="#htmlcaption2"/>
		</div>
		<!-- Slider Caption 1 -->
		<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
			<div class="container">
				<div class="slide1-text">
					<div class="middle-text">
						<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
							<h2>A BRAND</h2>
						</div>	
						<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
							<h2>NEW ARRIVALS</h2>
						</div>	
						<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
							One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. 
							Say hello to the future.
						</div>
						<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
							<a href="#">Shopping</a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		<!-- Slider Caption 2 -->
		<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
			<div class="container">
				<div class="slide1-text">
					<div class="middle-text">
						<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
							<h2>A BRAND</h2>
						</div>	
						<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
							<h2>NEW ARRIVALS</h2>
						</div>	
						<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
							Fascinating outdoor lounge chair with wooden chairs for outdoor ideas with outdoor chaise lounge chair.
						</div>
						<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
							<a href="#">Shopping</a>
						</div>	
					</div>	
				</div>					
			</div>
		</div>
	</div>
	<!-- slider-container end -->
	<!-- banner-area start -->
	<div class="banner-area pt-70" data-wow-delay="1s">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6" data-wow-delay=".3s">
					<div class="single-banner">
						<a href="#"><img src="images/banner/1.jpg" alt="" /></a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6" data-wow-delay=".3s">
					<div class="single-banner">
						<a href="#"><img src="images/banner/2.jpg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner-area end -->
	<!-- new-arrival-area start -->
	<div class="new-arrival-area pt-100">
		<div class="container">
			<div class="row">
				<div class="section-title text-center mb-20">
					<h2>new arrivals</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="product-tab">
						<!-- Nav tabs -->
						<ul class="custom-tab text-center mb-40">
							<li class="active"><a href="#home" data-toggle="tab">Sofa</a></li>
							<li><a href="#profile" data-toggle="tab"> Chair</a></li>
							<li><a href="#messages" data-toggle="tab"> Lighting</a></li>
							<li><a href="#settings" data-toggle="tab"> Sale</a></li>
							<li><a href="#new" data-toggle="tab">  What's New</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="row">
							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>										
								</div>
								<div class="tab-pane" id="profile">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>								
								</div>
								<div class="tab-pane" id="messages">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>									
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/1.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>								
								</div>
								<div class="tab-pane" id="settings">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/11.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/5.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/6.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>								
								</div>
								<div class="tab-pane" id="new">
									<div class="product-carousel">
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/2.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/3.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/4.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/10.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/12.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/9.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="product-wrapper mb-40">
												<div class="product-img">
													<a href="#"><img src="images/product/7.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="product-wrapper mb-40 mrg-nn-xs">
												<div class="product-img">
													<a href="#"><img src="images/product/8.jpg" alt="" /></a>
													<span class="new-label">New</span>
													<div class="product-action">
														<a href="#"><i class="pe-7s-cart"></i></a>
														<a href="#"><i class="pe-7s-like"></i></a>
														<a href="#"><i class="pe-7s-folder"></i></a>
														<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
													</div>
												</div>
												<div class="product-content">
													<div class="pro-title">
														<h3><a href="product-details.html">Cras Neque Metus</a></h3>
													</div>
													<div class="price-reviews">
														<div class="price-box">
															<span class="price product-price">$262.00</span>
															<span class="old-price product-price">$262.00</span>
														</div>
														<div class="pro-rating">
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
															<a href="#"><i class="fa fa-star-o"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- new-arrival-area end -->
	<!-- newsletter-area start -->
	<div class="newsletter-area bg-1 ptb-180">
		<div class="container">
			<div id="newsletter_block_left">
				<h4><span>Sign up</span> for newsletter</h4>
				<p>Get exclusive deals you wont find anywhere else straight to your inbox!</p>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8">
					<div class="block_content mt-60">
						<form id="mc-form" class="mc-form form-group">
                            <input id="mc-email" type="email" autocomplete="off" placeholder="Your Email">
                            <button  id="mc-submit" type="submit">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                             <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                             <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                             <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter-area end -->
	<!-- best-sell-area start -->
	<div class="best-sell-area pt-30">
		<div class="container">
			<div class="row">
				<div class="section-title text-center mb-50">
					<h2>Bestseller Products </h2>
				</div>
			</div>		
			<div class="row">
				<div class="product-carousel">
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/12.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/11.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/3.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/1.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/4.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/11.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/5.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/10.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/5.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/9.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/6.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/9.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-wrapper mb-40">
							<div class="product-img">
								<a href="#"><img src="images/product/7.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="product-wrapper mb-40 mrg-nn-xs">
							<div class="product-img">
								<a href="#"><img src="images/product/8.jpg" alt="" /></a>
								<span class="new-label">New</span>
								<div class="product-action">
									<a href="#"><i class="pe-7s-cart"></i></a>
									<a href="#"><i class="pe-7s-like"></i></a>
									<a href="#"><i class="pe-7s-folder"></i></a>
									<a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
								</div>
							</div>
							<div class="product-content">
								<div class="pro-title">
									<h3><a href="product-details.html">Cras Neque Metus</a></h3>
								</div>
								<div class="price-reviews">
									<div class="price-box">
										<span class="price product-price">$262.00</span>
										<span class="old-price product-price">$262.00</span>
									</div>
									<div class="pro-rating">
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
										<a href="#"><i class="fa fa-star-o"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
	</div>
	<!-- best-sell-area end -->
	<!-- latest-blog-area start -->
	<div class="latest-blog-area ptb-60">
		<div class="container">
			<div class="row">
				<div class="section-title text-center mb-50">
					<h2>latest blog</h2>
				</div>
			</div>			
			<div class="row">
				<div class="blog-active">
					<div class="col-lg-12">
						<div class="blog-wrapper mb-40">
							<div class="blog-img">
								<a href="#"><img src="images/blog/1.jpg" alt="" /></a>
							</div>
							<div class="blog-info">
								<h3><a href="#">What is Bootstrap? – The History...</a></h3>
								<div class="blog-meta">
									<span class="f-left">2016-04-20 21:50:35</span>
									<span class="f-right"><a href="#">Read More </a></span>
								</div>
							</div>
						</div>				
					</div>
					<div class="col-lg-12">
						<div class="blog-wrapper mb-40">
							<div class="blog-img">
								<a href="#"><img src="images/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-info">
								<h3><a href="#">From Now we are certified web...</a></h3>
								<div class="blog-meta">
									<span class="f-left">2016-04-20 21:50:35</span>
									<span class="f-right"><a href="#">Read More </a></span>
								</div>
							</div>
						</div>				
					</div>
					<div class="col-lg-12">
						<div class="blog-wrapper mb-40">
							<div class="blog-img">
								<a href="#"><img src="images/blog/1.jpg" alt="" /></a>
							</div>
							<div class="blog-info">
								<h3><a href="#">Answers to your Questions about...</a></h3>
								<div class="blog-meta">
									<span class="f-left">2016-04-20 21:50:35</span>
									<span class="f-right"><a href="#">Read More </a></span>
								</div>
							</div>
						</div>				
					</div>
					<div class="col-lg-12">
						<div class="blog-wrapper mb-40">
							<div class="blog-img">
								<a href="#"><img src="images/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-info">
								<h3><a href="#">Share the Love for PrestaShop 1.6</a></h3>
								<div class="blog-meta">
									<span class="f-left">2016-04-20 21:50:35</span>
									<span class="f-right"><a href="#">Read More </a></span>
								</div>
							</div>
						</div>				
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- latest-blog-area end -->
	<!-- brand-area start -->
	<div class="brand-area">
		<div class="container">
			<div class="brand-sep ptb-50">
				<div class="row">
					<div class="brand-active">
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/1.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/2.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/3.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/4.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/5.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/1.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-brand">
								<a href="#"><img src="images/brand/2.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- brand-area end -->
	<!-- service-area start -->
	<div class="service-area pt-70 pb-40 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30">
						<div class="service-icon">
							<i class="pe-7s-world"></i>
						</div>
						<div class="service-title">
							<h3>FREE SHIPPING</h3>
							<p>Free shipping on all UK orders</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30">
						<div class="service-icon">
							<i class="pe-7s-refresh"></i>
						</div>
						<div class="service-title">
							<h3>FREE EXCHANGE</h3>
							<p>30 days return on all items</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30 sm-mrg">
						<div class="service-icon">
							<i class="pe-7s-headphones"></i>
						</div>
						<div class="service-title">
							<h3>PREMIUM SUPPORT</h3>
							<p>We support online 24 hours a day</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service mb-30 xs-mrg sm-mrg">
						<div class="service-icon">
							<i class="pe-7s-gift"></i>
						</div>
						<div class="service-title">
							<h3>BLACK FRIDAY</h3>
							<p>Shocking discount on every friday</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- service-area end -->
	
	<!-- Modal -->
	<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <a href="shop.html"><img src="images/product/1.jpg" alt="" /></a>
                    </div>
                    <div class="modal-pro-content">
                        <h3><a href="single-product.html">Phasellus Vel Hendrerit</a></h3>
                        <div class="pro-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span>(2 customer reviews)</span>
                        <div class="price">
                            <span>$70.00</span>
                            <span class="old">$80.11</span>
                        </div>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>	
                        <form action="#">
                            <input type="number" value="1" />
                            <button>Add to cart</button>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categories: <a rel="tag" href="#">Albums</a>, <a rel="tag" href="#">Music</a></span> <span class="tagged_as">Tags: <a rel="tag" href="#">Albums</a>, <a rel="tag" href="#">Music</a></span> 
                        </div>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<!-- Modal end -->
@endsection

{{-- @section('scriptsAfterJs')
<script>
var filters = {!! json_encode($filters) !!};
$(document).ready(function () {
	$('.search-form input[name=search]').val(filters.search);
	$('.search-form select[name=order]').val(filters.order);
	$('.search-form select[name=order]').on('change', function() {
		$('.search-form').submit();
	});
})
</script>
@endsection --}}
