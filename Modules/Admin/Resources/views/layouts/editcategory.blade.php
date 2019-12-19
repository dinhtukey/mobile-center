@extends('admin.layout')
@section('title','Sửa danh mục sản phẩm')
@section('content')
<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Sữa danh mục</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        @include('notifi.note')
                                        <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                            {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tên danh mục</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input required type="text" value="{{$cate->category_name}}"
                                                    id="text-input" name="category_name" placeholder="Vd: GuitarAccoutic" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Hiển thị</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="category_status" id="select" class="form-control">
                                                        <option>Tùy chọn</option>
                                                        <?php
                                                            if($cate->category_status==0){
                                                        ?>
                                                        <option selected  value="0">Ẩn</option>
                                                        <option value="1">Hiện</option>
                                                        <?php
                                                            }else{
                                                        ?>
                                                        <option value="0">Ẩn</option>
                                                        <option selected value="1">Hiện</option>
                                                        <?php
                                                            }
                                                        ?>
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