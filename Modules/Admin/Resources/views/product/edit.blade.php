@extends('admin::layouts.master')
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
                                    @include('admin::notifi.note')
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="prod_name" value="{{$product->prod_name}}" placeholder="Vd: iPhone 11" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Giá sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="number" id="email-input" name="prod_price" value="{{$product->prod_price}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Ảnh sản phẩm</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input id="input_img" type="file" name="prod_img" class="form-control hidden" onchange="changeImg(this)">
                                                    <img id="out_img" class="thumbnail" width="200px" src="{{asset('storage/app/avatar/'.$product->prod_img)}}">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Phụ kiện</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="prod_accessories" value="{{$product->prod_accessories}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Bảo hành</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="prod_warranty" value="{{$product->prod_warranty}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Khuyến mãi</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="prod_promotion" value="{{$product->prod_promotion}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Tình trạng</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="password-input" name="prod_condition" value="{{$product->prod_condition}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Trạng thái</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="prod_active" id="select" class="form-control">
                                                        <?php 
                                                            if($product->prod_active==1){
                                                        ?>
                                                        <option selected value="1">Public</option>
                                                        <option value="0">Private</option>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <option value="1">Public</option>
                                                        <option selected value="0">Private</option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Miêu tả</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea required class="ckeditor" name="prod_description">{{$product->prod_description}}</textarea>
                                                    <script type="text/javascript">
                                                      var editor = CKEDITOR.replace('prod_description',{
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
                                                    <label for="textarea-input" class=" form-control-label">Nội dung</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea required class="ckeditor" name="prod_content">{{$product->prod_content}}</textarea>
                                                    <script type="text/javascript">
                                                      var editor = CKEDITOR.replace('prod_content',{
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
                                                    <label for="text-input" class=" form-control-label">Meta Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="prod_title_seo" value="{{$product->prod_title_seo}}" placeholder="Meta title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Meta Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="prod_description_seo" value="{{$product->prod_description_seo}}" placeholder="Meta description" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Danh mục</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="prod_cate" id="select" class="form-control">
                                                        @foreach($cateList as $cate)
                                                        <option value="{{$cate->cate_id}}" @if($product->prod_cate==$cate->cate_id) checked @endif >{{$cate->cate_name}}</option>
                                                        @endforeach
                                                        
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Thương hiệu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="prod_brand" id="select" class="form-control">
                                                    @foreach($brandList as $brand)
                                                        <option value="{{$brand->brand_id}}" @if($product->prod_brand==$brand->brand_id) checked @endif >{{$brand->brand_name}}</option>
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
                                                                <input checked type="radio" id="radio1" name="prod_featured" value="1" @if($product->prod_featured==1) checked @endif class="form-check-input">Có
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="radio2" name="prod_featured" value="0" @if($product->prod_featured==0) checked @endif class="form-check-input">Không
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                                    <i class="fa fa-dot-circle-o"></i> Lưu thông tin
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
                                <p>Copyright © 2020 devdinhtu. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection


