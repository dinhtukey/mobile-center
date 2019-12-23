@extends('admin::layouts.master')
@section('title','Sửa bài viết')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Sửa bài viết</strong>
                    </div>
                    <div class="card-body card-block">
                        @include('admin::notifi.note')
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tên bài viết</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input required type="text" id="text-input" name="art_name" value="{{$article->art_name}}" placeholder="Vd: iPhone 11" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email-input" class=" form-control-label">Ảnh bài viết</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input id="img" type="file" name="art_img" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="200px" src="{{asset('storage/app/avatar/'.$article->art_img)}}">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Trạng thái</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select required name="art_active" id="select" class="form-control">
                                        <?php
                                            if($article->art_active){
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
                                    <textarea required class="ckeditor" name="art_description">{{$article->art_description}}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('art_description', {
                                            language: 'vi',
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
                                    <textarea required class="ckeditor" name="art_content">{{$article->art_content}}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('art_content', {
                                            language: 'vi',
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
                                    <input type="text" id="text-input" name="art_title_seo" value="{{$article->art_title_seo}}" placeholder="Meta title" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Meta Description</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="art_description_seo" value="{{$article->art_description_seo}}" placeholder="Meta description" class="form-control">
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
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection