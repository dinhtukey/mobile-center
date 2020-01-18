@extends('admin::layouts.master')
@section('title','Danh sách đánh giá')
@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Danh sách đánh giá</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </div>
                    
                </div>
                <div class="table-responsive table-responsive-data2">
                    @include('admin::notifi.note')
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Sản phẩm</th>
                                <th>Nội dung</th>
                                <th>Rating</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($ratings as $rating)
                            <?php $i++; ?>
                            <tr class="tr-shadow">
                                <td><?php echo $i ?></td>
                                <td>{{ isset($rating->user->name) ? $rating->user->name : '[N\A]'}}</td>
                                <td>{{isset($rating->product->prod_name) ? $rating->product->prod_name : '[N\A]'}}</td>
                                <td>{{$rating->ra_content}}</td>
                                <td>{{$rating->ra_number}}</td>
                                
                                <td>
                                    <div class="table-data-feature">
                                        <a href="" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="item" data-toggle="tooltip" data-placement="top" title="Xóa">
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
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
