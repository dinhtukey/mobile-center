@extends('admin::layouts.master')
@section('title','Danh sách sản phẩm')
@section('content')
<style>
<<<<<<< HEAD
    .rating .active {
=======
    .rating .active{
>>>>>>> 59878e1a80017db78dd020f6eb27118b57509d21
        color: #ff9705 !important;
    }
</style>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Danh sách sản phẩm</h3>

                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form class="form-inline" action="">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Tìm kiếm " value="{{\Request::get('name')}}" />
                            </div>
                            <div class="form-group">
                                <select name="prod_cate" class="form-control">
                                    <option value="">Danh mục</option>
                                    @if(isset($cateList))
                                    @foreach($cateList as $cate)
                                    <option value="{{$cate->cate_id}}" {{\Request::get('prod_cate') == $cate->cate_id ? "selected='selected'" : ""}}>{{$cate->cate_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="prod_brand" class="form-control">
                                    <option value="">Thương hiệu</option>
                                    @if(isset($brandList))
                                    @foreach($brandList as $brand)
                                    <option value="{{$brand->brand_id}}" {{\Request::get('prod_brand') == $brand->brand_id ? "selected='selected'" : ""}}>{{$brand->brand_name}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="table-data__tool-right">
                        <a href="{{asset('/admin/product/add')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Thêm sản phẩm</a>

                    </div>
                </div>

                @include('admin::notifi.note')
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Nổi bật</th>
                                <th>Danh mục</th>
                                <th>Thương hiệu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($prodList as $prod)
                            <?php
<<<<<<< HEAD
                            $average = 0;
                            if ($prod->prod_total_rating) {
                                $average = round($prod->prod_total_number / $prod->prod_total_rating, 2);
                            }
                            $i++;
                            ?>
=======
                                $average =0;
                                if($prod->prod_total_rating){
                                    $average = round($prod->prod_total_number/$prod->prod_total_rating,2);
                                }
                            ?>
                            <?php $i++; ?>
>>>>>>> 59878e1a80017db78dd020f6eb27118b57509d21
                            <tr class="tr-shadow">
                                <td><?php echo $i ?></td>
                                <td>
                                    {{$prod->prod_name}}
                                    <ul>
                                        <li>
                                            <span>Đánh giá: </span>
                                            <span class="rating">
<<<<<<< HEAD
                                                @for($r=1;$r<=5;$r++) <i class="fa fa-star {{$i<=$average ? 'active' : ''}}" style="color: #999"></i>
                                                    @endfor
=======
                                                @for($i=1;$i<=5;$i++)
                                                    <i class="fa fa-star {{$i<=$average ? 'active' : ''}}" style="color: #999"></i>
                                                @endfor
>>>>>>> 59878e1a80017db78dd020f6eb27118b57509d21
                                            </span>
                                            <span>{{$average}}</span>
                                        </li>
                                    </ul>
                                </td>
                                <td>{{number_format($prod->prod_price,0,',','.')}} VND</td>
                                <td>
                                    <img height="100px" src="{{asset('storage/app/avatar/'.$prod->prod_img)}}">
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.action',['active',$prod->prod_id]) }}" class="badge {{$prod->getStatus($prod->prod_active)['class']}}">{{$prod->getStatus($prod->prod_active)['name']}}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.action',['featured',$prod->prod_id]) }}" class="badge {{$prod->getFeatured($prod->prod_featured)['class']}}">{{$prod->getFeatured($prod->prod_featured)['name']}}
                                    </a>
                                </td>
                                <td>{{isset($prod->category->cate_name) ? $prod->category->cate_name : '[N\A]' }}</td>
                                <td>{{isset($prod->brand->brand_name) ? $prod->brand->brand_name : ['N\A']}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('admin.product.action',['edit',$prod->prod_id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.product.action',['delete',$prod->prod_id]) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
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