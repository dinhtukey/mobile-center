@extends('layouts.app')
@section('title','Liên hệ')
@section('content')
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
						<li class="category3"><span>Liên hệ</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-contact-area">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="contact-us-area">
					<!-- google-map-area start -->
					<div class="google-map-area">
						<!--  Map Section -->
						<div id="contacts" class="map-area">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15673.017682576789!2d106.7992188084015!3d10.868243570452899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1578403745283!5m2!1svi!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>

					</div>
					<!-- google-map-area end -->
					<!-- contact us form start -->
					<div class="contact-us-form">
						<div class="sec-heading-area">
							<h2>Liên hệ</h2>
						</div>
						@include('admin::notifi.note')
						<div class="contact-form">
							<span class="legend">Mời bạn nhập thông tin liên hệ</span>
							<form action="" method="post">
								@csrf
								<div class="form-top">
									<div class="form-group col-sm-10">
										<label>Họ tên <sup>*</sup></label>
										<input type="text" name="name" class="form-control" required>
									</div>
									<div class="form-group col-sm-6 col-md-6 col-lg-5">
										<label>Email <sup>*</sup></label>
										<input type="email" name="email" class="form-control" required>
									</div>
									<div class="form-group col-sm-6 col-md-6 col-lg-5">
										<label>Tiêu đề <sup>*</sup></label>
										<input type="text" name="title" class="form-control" required>
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-10">
										<label>Nội dung <sup>*</sup></label>
										<textarea class="yourmessage" name="content" required></textarea>
									</div>
								</div>
								<div class="submit-form form-group col-sm-12 submit-review">
									<p><sup>*</sup> Required Fields</p>
									<button type="submit" class="add-tag-btn" style="
    font-size: 13px;
    letter-spacing: 1.2px;
    padding: 9px 18px;
    line-height: 1;
    border-color: #3f3f3f;
    color: #fff;
    background: #3f3f3f;
    margin: 0; class=" submit">Gửi thông tin</button>
								</div>
							</form>
						</div>
					</div>
					<!-- contact us form end -->
				</div>
			</div>
		</div>
	</div>
</div>
@stop