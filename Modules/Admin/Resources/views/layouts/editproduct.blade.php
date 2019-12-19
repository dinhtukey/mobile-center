@extends('admin.layout')
@section('title','Sửa sản phẩm')
@section('content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Sửa sản phẩm</strong>
                                    </div>
                                    <div class="card-body card-block">
                                    @include('notifi.note')
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="product_name" value="{{$product->product_name}}" placeholder="Vd: iPhone 11" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Giá sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="number" id="email-input" name="product_price" value="{{$product->product_price}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Ảnh sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input id="img" type="file" name="product_img" class="form-control hidden" onchange="changeImg(this)">
                                                    <img id="avatar" class="thumbnail" width="200px" src="{{asset('storage/app/avatar/'.$product->product_img)}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Phụ kiện</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="product_accessories" value="{{$product->product_accessories}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Bảo hành</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="product_warranty" value="{{$product->product_warranty}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Khuyến mãi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="product_promotion" value="{{$product->product_promotion}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Tình trạng</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="product_condition" value="{{$product->product_condition}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Trạng thái</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="product_status" id="select" class="form-control">
                                                        <option value="1" @if($product->product_status==1) checked @endif>Còn hàng</option>
                                                        <option value="0" @if($product->product_status==0) checked @endif>Hết hàng</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Miêu tả</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea required class="ckeditor" name="product_description">{{$product->product_description}}</textarea>
                                                    <script type="text/javascript">
                                                      var editor = CKEDITOR.replace('product_description',{
                                                        language:'vi',
                                                        filebrowserImageBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Images',
                                                        filebrowserFlashBrowseUrl: '../editor/ckfinder/ckfinder.html?Type=Flash',
                                                        filebrowserImageUploadUrl: '../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                        filebrowserFlashUploadUrl: '../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                                    });
                                                    </script>
                                                </div>
                                            </div>
										
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Danh mục</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="product_cate" id="select" class="form-control">
                                                        @foreach($cateList as $cate)
                                                        <option value="{{$cate->category_id}}" @if($product->product_cate==$cate->category_id) checked @endif>{{$cate->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Thương hiệu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="product_brand" id="select" class="form-control">
                                                        @foreach($brandList as $brand)
                                                        <option value="{{$brand->brand_id}}" @if($product->product_brand==$brand->brand_id) checked @endif>{{$brand->brand_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Sản phẩm nổi bật</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="radio" id="radio1" name="product_featured" value="1" @if($product->product_featured==1) checked @endif class="form-check-input">Có
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="product_featured" value="0" @if($product->product_featured==0) checked @endif class="form-check-input">Không
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                                {{csrf_field()}}
                                        </form>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection


<!--


-->