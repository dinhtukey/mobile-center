@if($orders)
<table class="cart-table">
								<thead>
									<tr>
                                        <th width="5%">STT</th>
                                        <th width="30%">Tên sản phẩm</th>
										<th width="20%">Ảnh mô tả</th>
										<th width="15%">Đơn giá</th>
										<th width="5%">Số lượng</th>
										<th width="15%">Thành tiền</th>
										<th width="5%">Thao tác</th>
									</tr>
								</thead>
								<tbody>
                                    <?php $i=0; ?>
                                    @foreach($orders as $order)
                                    <?php $i++; ?>
									<tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
											<a href="{{route('product.get.product',[$order->product->prod_slug,$order->product->prod_id])}}">{{isset($order->product->prod_name) ? $order->product->prod_name : 'N\A'}}</a>
										</td>
										<td>
											<a href="#"><img style="width: 50%" src="{{isset($order->product->prod_img) ? asset('storage/app/avatar/'.$order->product->prod_img) : 'N\A'}}" class="img-responsive" alt=""/></a>
										</td>
										<td>
											<div class="cart-price">{{number_format($order->or_price,0,',','.')}} ₫</div>
										</td>
										<td>
										<div class="form-group">
                                                {{$order->or_qty}}
											</div>
										</td>
										<td>
											<div class="cart-subtotal">{{number_format($order->or_qty*$order->or_price,0,',','.')}} ₫</div>
										</td>
										<td><a href=""><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @endforeach
									
								</tbody>
							</table>
@endif