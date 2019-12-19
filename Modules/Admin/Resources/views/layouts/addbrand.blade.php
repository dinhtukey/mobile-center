@extends('admin.layout')
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
                                        @include('notifi.note')
                                        <form action="{{asset('/admin/brand/add')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tên thương hiệu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" id="text-input" name="brand_name" placeholder="Vd: SamSung" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Hiển thị</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select required name="brand_status" id="select" class="form-control">
                                                        <option value="">Tùy chọn</option>    
                                                        <option value="0">Ẩn</option>
                                                        <option value="1">Hiện</option>
                                                    </select>
                                                </div>
                                            </div>
                                                <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
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