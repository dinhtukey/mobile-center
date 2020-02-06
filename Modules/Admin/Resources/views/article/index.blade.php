@extends('admin::layouts.master')
@section('title','Danh sách bài viết')
@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Danh sách bài viết</h3>

                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form class="form-inline" action="">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Tìm kiếm " value="{{\Request::get('name')}}" />
                            </div>
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="table-data__tool-right">
                        <a href="{{asset('/admin/article/add')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Thêm bài viết</a>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>

                @include('admin::notifi.note')
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên bài viết</th>
                                <th>Ảnh bài viết</th>
                                <th>Mô tả</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($artList as $art)
                            <?php $i++; ?>
                            <tr class="tr-shadow">
                                <td><?php echo $i ?></td>
                                <td>{{$art->art_name}}</td>
                                <td>
                                    <img height="100px" src="{{asset('storage/app/avatar/'.$art->art_img)}}">
                                </td>
                                <td>
                                    {!!str_limit($art->art_description, $limit = 50, $end = '...')!!}
                                </td>
                                <td>
                                    <a href="{{ route('admin.article.action',['active',$art->id]) }}" class="badge {{$art->getStatus($art->art_active)['class']}}">{{$art->getStatus($art->art_active)['name']}}
                                    </a>
                                </td>
                                <td>
                                    {{$art->created_at}}
                                </td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('admin.article.action',['edit',$art->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.article.action',['delete',$art->id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
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