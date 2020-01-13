@extends('admin::layouts.master')
@section('title','Danh sách đơn hàng')
@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Danh sách đơn hàng</h3>
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
                    <div class="table-data__tool-right">
                        <a href="{{asset('/admin/category/add')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Thêm danh mục</a>
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
                <div class="table-responsive table-responsive-data2">
                    @include('admin::notifi.note')
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; ?>
                            @foreach($transations as $transation)
                            <?php $i++; ?>
                            <tr class="tr-shadow">
                                <td><?php echo $i ?></td>
                                <td>{{ isset($transation->user->name) ? $transation->user->name : '[N\A]'}}</td>
                                <td>{{$transation->tr_address}}</td>
                                <td>{{$transation->tr_phone}}</td>
                                <td>{{number_format($transation->tr_total,0,',','.')}} ₫</td>
                                <td>
                                    @if($transation->tr_status==1)
                                    <a href="#" class="badge badge-success">Đã xử lý</a>
                                    @else
                                    <a href="#" class="badge badge-warning">Chờ xử lý</a>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-data-feature">
                                        <a class="item js_order_item" data-id="{{$i}}" href="{{route('admin.transaction.getOrder',$transation->tr_id)}}" data-toggle="tooltip" data-placement="top" title="Xem chi tiết">
                                            <i class="fas fa-eye"></i>
                                        </a>
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

<!-- Modal -->
<div class="modal fade" id="myModalOrder" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="display: initial;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chi tiết mã đơn hàng #<b class="transaction_id"></b></h4>
            </div>
            <div class="modal-body" id="md_content">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


@stop
@section('scripts')
<script>
    $(function() {
        $('.js_order_item').click(function(event) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $('#md_content').html('');
            $('.transaction_id').text('').text($this.attr('data-id'));
            $("#myModalOrder").modal('show');

            $.ajax({
                url: url,
            }).done(function(result){
                //console.log(result);
                if(result){
                    $('#md_content').append(result);
                }
            });
            
        });
    })
</script>
@stop