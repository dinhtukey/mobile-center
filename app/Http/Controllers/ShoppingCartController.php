<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAddCart($id,Request $request){
        
        $product = Product::find($id);
        $price = $product->prod_price;
        if($product->prod_sale){
            $price = $price*(100-$product->prod_sale)/100;
        }
        if(!$product) return redirect('/');
        \Cart::add([
            'id' => $id, 
            'name' => $product->prod_name, 
            'qty' => 1, 
            'price' => $product->prod_price, 
            'options' => [
                'avatar' => $product->prod_img,
                'sale' => $product->prod_sale,
                'price_old' => $product->prod_price,
            ],
        ]);

        return redirect()->back();
    }

    public function getListCart(){
        
        //check giỏ hàng
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;
        return view('shopping.index',$data);
    }
    public function getActionCart($action,$id,Request $request){
        if($action){
            switch ($action) {
                case 'xoa':
                    if($id=='tat-ca'){
                        \Cart::destroy();
                    }else{
                        \Cart::remove($id);
                    }
                    return back();
                    break;
                default:
                    # code...
                    break;
            }
        }
    }
    public function getUpdateCart(Request $request){
        \Cart::update($request->rowId,$request->qty);
    }


    // form thanh toán
    public function getFormPay(){
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;

        //check giỏ hàng
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;
        return view('shopping.checkout',$data);
    }

    public function postFormPay(Request $request){
        $total = \Cart::total(2,'.','');
        $totalMoney = $total-\Cart::count()*400000;
        $transaction = new Transaction();
        $transaction->tr_total = $totalMoney;
        $transaction->tr_note = $request->note;
        $transaction->tr_address = $request->address;
        $transaction->tr_phone = $request->phone;
        $transaction->tr_user = get_data_user('web');
        $transaction->save();

        if($transaction){
            $products = \Cart::content();
            foreach($products as $product){
                $order = new Order();
                $order->or_product = $product->id;
                $order->or_qty = $product->qty;
                $order->or_price = $product->options->price_old;
                $order->or_sale = $product->options->sale;
                $order->or_transaction = $transaction->id;
                $order->save();
            }
        }
        \Cart::destroy();
        return redirect('/');
    }
}
