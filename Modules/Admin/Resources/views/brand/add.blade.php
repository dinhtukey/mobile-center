@extends('admin::layouts.master')
@section('title','Thêm thương hiệu sản phẩm')
@section('content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Thêm thương hiệu</strong>
                                    </div>
                                    <div class="card-body card-block">
                                    @include('admin::notifi.note')
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tên thương hiệu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="brand_name" placeholder="iPhone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Icon</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="brand_icon" placeholder="fa fa-home" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Meta Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="brand_title_seo" placeholder="Meta title" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Meta Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="brand_description_seo" placeholder="Meta description" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Nổi bật</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="brand_active" id="select" class="form-control">
                                                        <option value="1">Public</option>
                                                        <option value="0">Private</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Lưu thông tin
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>

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