@extends('layouts.app')
@section('title','Trang chủ')
@section('content')
<!-- start home slider -->
<div class="slider-area an-1 hm-1">
             <!-- slider -->
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides">	
					<img src="img/slider/home-1/slider11.png" alt="" title="#slider-direction-1"  />
					<img src="img/slider/home-1/slider22.png" alt="" title="#slider-direction-2"  />
					<img src="img/slider/home-1/slider33.png" alt="" title="#slider-direction-1"  />
					<img src="img/slider/home-1/slider4.png" alt="" title="#slider-direction-2"  />
					<img src="img/slider/home-1/slider5.png" alt="" title="#slider-direction-1"  />
					<img src="img/slider/home-1/slider6.png" alt="" title="#slider-direction-2"  />
					<img src="img/slider/home-1/slider7.png" alt="" title="#slider-direction-1"  />
					<img src="img/slider/home-1/slider8.png" alt="" title="#slider-direction-2"  />
					<img src="img/slider/home-1/slider9.png" alt="" title="#slider-direction-1"  />
					
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-cn s-tb slider-1">
						<div class="title-container s-tb-c title-compress">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<div class="slider-progress"></div>
					<div class="slider-content t-lfl s-tb slider-2 lft-pr">
						<div class="title-container s-tb-c">
							<h2 class="title1">minimal bags</h2>
							<h3 class="title2" >collection</h3>
							<h4 class="title2" >Simple is the best.</h4>
							<a class="btn-title" href="">View collection</a>
						</div>
					</div>	
				</div>
			</div>
			<!-- slider end-->
		</div>
        <!-- end home slider -->
		<!-- product section start -->
		<div class="our-product-area">
			<div class="container">
				<!-- area title start -->
				<div class="area-title">
					<h2>Sản phẩm nổi bật</h2>
				</div>
				<!-- area title end -->
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="features-tab">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a></li>
								<li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a></li>
							</ul>
							<!-- Tab pans -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<div class="row">
										<div class="features-curosel">
											@foreach($productFeatured as $product)
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="{{route('product.get.product',[$product->prod_slug,$product->prod_id])}}">
															<img class="primary-image" src="{{asset('storage/app/avatar/'.$product->prod_img)}}" alt="" />
															<img class="secondary-image" src="{{asset('storage/app/avatar/'.$product->prod_img)}}" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="{{route('product.get.product',[$product->prod_slug,$product->prod_id])}}" title="Xem nhanh"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Thêm vào yêu thích"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="{{route('shoppingcart.add',$product->prod_id)}}" title="Thêm vào giỏ hàng"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Thêm vào so sánh"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">{{number_format($product->prod_price,0,',','.')}} ₫</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">{{str_limit($product->prod_name, $limit = 30, $end = '...')}}</a></h2>
														<p>{!!str_limit($product->prod_description, $limit = 50, $end = '...')!!}</p>
													</div>
												</div>
												<!-- single-product end -->
											
											</div>
											@endforeach
										
											<!-- single-product end -->
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="profile">
									<div class="row">
										<div class="features-curosel">
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$110.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$200.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-8.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$370.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Aliquam consequat</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-10.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$170.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Pleasure rationally</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-13.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Proin lectus ipsum</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-2.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-3.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$300.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Consequences</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-4.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$350.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Quisque in arcu</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-6.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-7.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$250.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-9.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$180.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-11.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$310.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
											<div class="col-lg-12 col-md-12">
												<!-- single-product start -->
												<div class="single-product first-sale">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-5.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$450.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
												<!-- single-product start -->
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="primary-image" src="img/products/product-7.jpg" alt="" />
															<img class="secondary-image" src="img/products/product-8.jpg" alt="" />
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price">$178.00</span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#">Donec non est</a></h2>
														<p>Nunc facilisis sagittis ullamcorper...</p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- banner-area start -->
		<div class="banner-area">
			<div class="container-fluid">
				<div class="row">
					<a href=""><img src="img/banner/banner-1.jpg" alt="" /></a>
				</div>
			</div>
		</div>
		<!-- banner-area end -->
		<!-- product section start -->
		<div class="our-product-area new-product">
			<div class="container">
				<div class="area-title">
					<h2>New products</h2>
				</div>
				<!-- our-product area start -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="features-curosel">
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-1.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$200.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-5.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-6.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$300.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-9.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-10.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$270.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
									
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-13.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-1.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$340.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<span class="sale-text">Sale</span>
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-4.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-5.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$360.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-8.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-9.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$400.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Accumsan elit</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-11.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-12.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$280.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Pellentesque habitant</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="col-lg-12 col-md-12">
									<div class="single-product first-sale">
										<div class="product-img">
											<a href="#">
												<img class="primary-image" src="img/products/product-11.jpg" alt="" />
												<img class="secondary-image" src="img/products/product-2.jpg" alt="" />
											</a>
											<div class="action-zoom">
												<div class="add-to-cart">
													<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="actions">
												<div class="action-buttons">
													<div class="add-to-links">
														<div class="add-to-wishlist">
															<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
														</div>
														<div class="compare-button">
															<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
														</div>									
													</div>
													<div class="quickviewbtn">
														<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
													</div>
												</div>
											</div>
											<div class="price-box">
												<span class="new-price">$222.00</span>
											</div>
										</div>
										<div class="product-content">
											<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
											<p>Nunc facilisis sagittis ullamcorper...</p>
										</div>
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>	
					</div>
				</div>
				<!-- our-product area end -->	
			</div>
		</div>
		<!-- product section end -->
		<!-- latestpost area start -->
		<div class="latest-post-area">
			<div class="container">
				<div class="area-title">
					<h2>Bài viết mới nhất</h2>
				</div>
				<div class="row">
					<div class="all-singlepost">
						@foreach($articleNews as $article)
						<!-- single latestpost start -->
						
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="single-post" style="margin-bottom: 40px">
								<div class="post-thumb">
									<a href="#">
										<img src="{{asset('storage/app/avatar/'.$article->art_img)}}" alt="" style="width: 370px;height: 280px"/>
									</a>
								</div>
								<div class="post-thumb-info">
									
									<div class="postexcerpt">
										<h2 class="product-name"><a href="#">{{$article->art_name}}</a></h2>
										<p></p>
										<p>{!!str_limit($article->art_description, $limit = 200, $end = '...')!!}</p>
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- single latestpost end -->
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- latestpost area end -->
		<!-- block category area start -->
		<div class="block-category">
			<div class="container">
				<div class="row">
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Featureds</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-1.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-2.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-5.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-6.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>On Sales</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-10.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-8.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
					<!-- featured block start -->
					<div class="col-md-4">
						<!-- block title start -->
						<div class="block-title">
							<h2>Populers</h2>
						</div>
						<!-- block title end -->
						<!-- block carousel start -->
						<div class="block-carousel">
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-13.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Voluptas nulla</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-14.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Cras neque metus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-11.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec ac tempus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$235.00 <span class="old-price">$333.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-12.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Primis in faucibus</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$205.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-4.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-9.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Accumsan elit</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$165.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
							<div class="block-content">
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-7.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Pellentesque habitant</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
								<!-- single block start -->
								<div class="single-block">
									<div class="block-image pull-left">
										<a href="product-details.html"><img src="img/block-cat/block-3.jpg" alt="" /></a>
									</div>
									<div class="category-info">
										<h3><a href="product-details.html">Donec non est</a></h3>
										<p>Nunc facilisis sagittis ullamcorper...</p>
										<div class="cat-price">$560.00</div>
										<div class="cat-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>								
									</div>
								</div>
								<!-- single block end -->
							</div>
						</div>
						<!-- block carousel end -->
					</div>
					<!-- featured block end -->
				</div>
			</div>
		</div>
		<!-- block category area end -->
		<!-- testimonial area start -->
		<div class="testimonial-area lap-ruffel">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="crusial-carousel">
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>BootExperts</span>
							</div>
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>Lavoro Store!</span>
							</div>
							<div class="crusial-content">
								<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
								<span>MR Selim Rana</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial area end -->
		<!-- Brand Logo Area Start -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel">
						<div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Brand Logo Area End -->
		<!-- FOOTER START -->
@stop