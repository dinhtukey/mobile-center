@extends('admin::layouts.master')
@section('title','Danh mục sản phẩm')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Danh sách danh mục</h3>
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
                        <a href="{{asset('/admin/category/add')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Thêm danh mục</a>
                        
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    @include('admin::notifi.note')
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Title seo</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($listCategory))
                            <?php $i = 0; ?>
                            @foreach($listCategory as $category)
                            <?php $i++; ?>
                            <tr class="tr-shadow">
                                <td><?php echo $i ?></td>
                                <td>{{$category->cate_name}}</td>
                                <td>{{$category->cate_title_seo}}</td>
                                <td>
                                    <a href="{{ route('admin.category.action',['active',$category->cate_id]) }}" class="badge {{$category->getActive($category->cate_active)['class']}}">{{$category->getActive($category->cate_active)['name']}}
                                    </a>
                                </td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{asset('/admin/category/edit/'.$category->cate_id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="{{route('admin.category.action',['delete',$category->cate_id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                            @endif

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