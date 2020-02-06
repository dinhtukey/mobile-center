@extends('layouts.app')
@section('title','Chi tiết sản phẩm')
@section('content')
<style>
	.product-tab-content {
		overflow: hidden;
	}

	.product-tab-content h2 {
		font-size: 24px !important;
	}

	.product-tab-content h3 {
		font-size: 20px !important;
	}

	.product-tab-content h4 {
		font-size: 18px !important;
	}

	.product-tab-content img {
		margin: 0 auto;
		text-align: center;
		max-width: 100%;
		display: block;
	}

	.list_star i:hover {
		cursor: pointer;
	}

	.list_star .rating_active {
		color: #ff9705;
	}

	.list_star_text {
		display: inline-block;
		margin-left: 10px;
		position: relative;
		background: #52b858;
		color: #fff;
		padding: 2px 8px;
		box-sizing: border-box;
		font-size: 12px;
		border-radius: 2px;
		display: none;
	}

	.list_star_text:after {
		right: 100%;
		top: 50%;
		border: solid transparent;
		content: " ";
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		border-color: rgba(82, 184, 88, 0);
		border-right-color: #52b858;
		border-width: 6px;
		margin-top: -6px;
	}
	.rating .active{
        color: #ff9705 !important;
    }
</style>
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="container-inner">
					<ul>
						<li class="home">
							<a href="{{route('home')}}">Home</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="home">
							<a href="{{route('category.list.product',[$cateName->cate_slug,$cateName->cate_id])}}">{{$cateName->cate_name}}</a>
							<span><i class="fa fa-angle-right"></i></span>
						</li>
						<li class="category3"><span>{{$productDetail->prod_name}}</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs area end -->
<!-- product-details Area Start -->
<div class="product-details-area">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-5 col-xs-12">
				<div class="zoomWrapper">
					<div id="img-1" class="zoomWrapper single-zoom">
						<a href="#">
							<img id="zoom1" src="{{asset('storage/app/avatar/'.$productDetail->prod_img)}}" data-zoom-image="{{asset('storage/app/avatar/'.$productDetail->prod_img)}}"" alt=" big-1">
						</a>
					</div>
					<div class="single-zoom-thumb">
						<ul class="bxslider" id="gallery_01">
							<li>
								<a href="#" class="elevatezoom-gallery active" data-update="" data-image="img/product-details/big-1-1.jpg" data-zoom-image="img/product-details/ex-big-1-1.jpg"><img src="img/product-details/th-1-1.jpg" alt="zo-th-1" /></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-1-2.jpg" data-zoom-image="img/product-details/ex-big-1-2.jpg"><img src="img/product-details/th-1-2.jpg" alt="zo-th-2"></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-1-3.jpg" data-zoom-image="img/product-details/ex-big-1-3.jpg"><img src="img/product-details/th-1-3.jpg" alt="ex-big-3" /></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-4.jpg" data-zoom-image="img/product-details/ex-big-4.jpg"><img src="img/product-details/th-4.jpg" alt="zo-th-4"></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-5.jpg" data-zoom-image="img/product-details/ex-big-5.jpg"><img src="img/product-details/th-5.jpg" alt="zo-th-5" /></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-6.jpg" data-zoom-image="img/product-details/ex-big-6.jpg"><img src="img/product-details/th-6.jpg" alt="ex-big-3" /></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-7.jpg" data-zoom-image="img/product-details/ex-big-7.jpg"><img src="img/product-details/th-7.jpg" alt="ex-big-3" /></a>
							</li>
							<li class="">
								<a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-8.jpg" data-zoom-image="img/product-details/ex-big-8.jpg"><img src="img/product-details/th-8.jpg" alt="ex-big-3" /></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">
				<div class="product-list-wrapper">
					<div class="single-product">
						<div class="product-content">
							<h2 class="product-name"><a href="#">Điện thoại {{$productDetail->prod_name}}</a></h2>
							<div class="rating-price">
								<div class="pro-rating">
									<?php
										$average = 0;
										if ($productDetail->prod_total_rating) {
											$average = round($productDetail->prod_total_number / $productDetail->prod_total_rating, 2);
										}
									?>
									<span class="rating">
                                                @for($i=1;$i<=5;$i++)
                                                    <i class="fa fa-star {{$i<=$average ? 'active' : ''}}" style="color: #999"></i>
                                                @endfor
											</span>
											<span>{{$average}}</span>
								</div>
								<div class="price-boxes">
									<span class="new-price">{{number_format($productDetail->prod_price,0,',','.')}} ₫</span>
								</div>
							</div>
							<div class="product-desc">
								<p>{!!$productDetail->prod_description!!}</p>
							</div>
							<p class="availability in-stock">Availability: <span>In stock</span></p>
							<div class="actions-e">
								<div class="action-buttons-single">
									<!--<div class="inputx-content">
												<label for="qty">Quantity:</label>
												<input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
											</div>-->
									<div class="add-to-cart">
										<a href="{{route('shoppingcart.add',$productDetail->prod_id)}}">Thêm vào giỏ hàng</a>
									</div>
									<div class="add-to-links">
										<div class="add-to-wishlist">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
										</div>
										<div class="compare-button">
											<a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="singl-share">
								<a href="#"><img src="img/single-share.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="single-product-tab">
				<!-- Nav tabs -->
				<ul class="details-tab">
					<li class="active"><a href="#" data-toggle="tab">Chi tiết sản phẩm</a></li>
					<li class=""><a href="#messages" data-toggle="tab"> Đánh giá</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="home">
						<div class="product-tab-content">
							{!!$productDetail->prod_content!!}
						</div>
					</div>
					<hr>
					<div class="component_rating" style="margin-bottom: 20px">
						<h4>Đánh giá sản phẩm</h4>
						<div class="component_rating_content" style="display: flex;align-items: center;border-radius: 5px;border: 1px solid #dedede">
							<div class="rating_item" style="width: 20%;position: relative">
								<span class="fa fa-star" style="font-size: 100px;display: block;color: #ff9705;margin: 0 auto;text-align: center"></span>
								<b style="position: absolute;top: 50%;left: 50%;color: white;font-size: 20px;transform: translateX(-50%) translateY(-50%)">{{$average}}</b>
							</div>


							<div class="list_rating" style="width: 60%;padding: 20px">
								@for($i=5;$i>0;$i--)
								<div class="item_rating" style="display: flex;align-items: center">

									<div style="width: 10%">
										{{$i}} <span style="color: #ff9705" class="fa fa-star"></span>
									</div>
									<div style="width: 70%;margin: 0 20px">
										<span style="width: 100%;height: 8px;display: block;border: 1px solid #dedede;border-radius: 5px;background-color: #dedede"><b style="width: 30%;background-color: #f25800;display: block;height: 100%;border-radius: 5px;"></b></span>
									</div>
									<div style="width: 20%">
										<a href="">290 đánh giá</a>
									</div>

								</div>
								@endfor
							</div>

							<div style="width: 20%">
								<a class="js_rating_action" href="" style="width: 200px;background-color: #288ad6;padding: 10px;color: white;border-radius: 5px">Gửi đánh giá của bạn</a>
							</div>
						</div>
						<?php
						$listRatingText = [
							1 => 'Không thích',
							2 => 'Tạm được',
							3 => 'Bình thường',
							4 => 'Rất tốt',
							5 => 'Tuyệt vời quá',
						];
						?>
						<div class="form_rating hide">
							<div style="display: flex;margin-top: 15px;font-size: 15px">
								<p style="margin-bottom: 0">Chọn đánh giá của bạn</p>
								<span style="margin: 0 15px" class="list_star">
									@for($i=1;$i<=5;$i++) <i class="fa fa-star" data-key="{{$i}}"></i>
										@endfor
								</span>
								<span class="list_star_text"></span>
								<input type="hidden" value="" class="number_rating">
							</div>
							<div style="margin-top: 15px">
								<textarea name="" class="form-control" id="ra_content" cols="30" rows="10"></textarea>
							</div>
							<div style="margin-top: 15px">
								<a href="{{route('post.rating',$productDetail->prod_id)}}" class="js_rating_product" style="width: 200px;background-color: #288ad6;padding: 10px;color: white;border-radius: 5px">Gửi đánh giá</a>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="messages">
						<div class="single-post-comments col-md-6 col-md-offset-3">
							<div class="comments-area">
								<h3 class="comment-reply-title">1 REVIEW FOR TURPIS VELIT ALIQUET</h3>
								<div class="comments-list">
									<ul>
										<li>
											<div class="comments-details">
												<div class="comments-list-img">
													<img src="img/user-1.jpg" alt="">
												</div>
												<div class="comments-content-wrap">
													<span>
														<b><a href="#">Admin - </a></b>
														<span class="post-time">October 6, 2014 at 1:38 am</span>
													</span>
													<p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="comment-respond">
								<h3 class="comment-reply-title">Add a review</h3>
								<span class="email-notes">Your email address will not be published. Required fields are marked *</span>
								<form action="#">
									<div class="row">
										<div class="col-md-12">
											<p>Name *</p>
											<input type="text">
										</div>
										<div class="col-md-12">
											<p>Email *</p>
											<input type="email">
										</div>
										<div class="col-md-12">
											<p>Your Rating</p>
											<div class="pro-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
												<a href="#"><i class="fa fa-star-o"></i></a>
											</div>
										</div>
										<div class="col-md-12 comment-form-comment">
											<p>Your Review</p>
											<textarea id="message" cols="30" rows="10"></textarea>
											<input type="submit" value="Submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- product-details Area end -->
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
@stop
@section('scripts')
<script>
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(function() {
		let listStar = $('.list_star .fa');

		listRatingText = {
			1: 'Không thích',
			2: 'Tạm được',
			3: 'Bình thường',
			4: 'Rất tốt',
			5: 'Tuyệt vời quá',
		}
		//$('.list_star_text').text('').text(listRatingText[5]).show();

		listStar.mouseover(function() {
			let $this = $(this);
			let number = $this.attr('data-key');
			listStar.removeClass('rating_active');

			$('.number_rating').val(number);
			$.each(listStar, function(key, value) {
				if ((key + 1) <= number) {
					$(this).addClass('rating_active');
				}
			});
			$('.list_star_text').text('').text(listRatingText[number]).show();
			console.log();
		});

		$('.js_rating_action').click(function(event) {
			event.preventDefault();
			let $this = $(this);
			if ($('.form_rating').hasClass('hide')) {
				$this.text('Đóng lại');
				$('.form_rating').addClass('active').removeClass('hide');
			} else {
				$this.text('Gửi đánh giá của bạn');
				$('.form_rating').addClass('hide').removeClass('active');
			}
		});

		$('.js_rating_product').click(function(e) {
			e.preventDefault();
			let content = $('#ra_content').val();
			let number = $('.number_rating').val();
			let url = $(this).attr('href');

			if (content && number) {
				$.ajax({
					url: url,
					type: 'POST',
					data: {
						number: number,
						r_content: content
					}
				}).done(function(result) {
					if (result.code == 'danh_gia_xong') {
						alert('Gửi đánh giá thành công');
						location.reload();
					}
				});
			}
		});
	});
</script>
@stop