@extends('layouts.app')
@section('title','Thanh toán')
@section('content')
<!-- breadcrumbs area start -->
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="container-inner">
							<ul>
								<li class="home">
									<a href="index.html">Home</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
                                <li class="home">
									<a href="index.html">Giỏ hàng</a>
									<span><i class="fa fa-angle-right"></i></span>
								</li>
                                <li class="category3"><span>Thanh toán</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs area end -->
		<!-- Shopping Table Container -->
		<div class="cart-area-start">
			<div class="container">
            <div class="container wrapper"> 
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                        <!--REVIEW ORDER-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Danh sách sản phẩm <div class="pull-right"><small><a class="afix-1" href="{{route('shoppingcart.list')}}">Sửa đổi giỏ hàng</a></small></div>
                            </div>
                            <div class="panel-body">
                            @foreach($productCart as $product)
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <img class="img-responsive" src="{{asset('storage/app/avatar/'.$product->options->avatar)}}" />
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">{{$product->name}}</div>
                                        <div class="col-xs-12"><small>Số lượng:<span> {{$product->qty}}</span></small></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6>{{number_format($product->qty*$product->price,0,',','.')}}<span> ₫</span></h6>
                                    </div>
                                </div>
                                <div class="form-group"><hr /></div>
                                @endforeach
                                <h5>Tổng thanh toán: <span>{{number_format($total-\Cart::count()*400000,0,',','.')}} ₫</span></h5>
                            </div>
                        </div>
                        <!--REVIEW ORDER END-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                        <!--SHIPPING METHOD-->
                        <div class="panel panel-info">
                            <div class="panel-heading">Thông tin thanh toán</div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" value="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email:</strong></div>
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control" value="{{get_data_user('web','email')}}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                    <div class="col-md-12"><input type="text" name="phone" class="form-control" value="{{get_data_user('web','phone')}}" /></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                    <div class="col-md-12">
                                        <textarea name="note" cols="30" rows="10" class="form-control">

                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            Xác nhận thông tin
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SHIPPING METHOD END-->
                    </div>
                
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
    </div>
			</div>	
		</div>
        <!-- Shopping Table Container -->
@stop