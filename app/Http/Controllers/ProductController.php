<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getDetailProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        if($id=array_pop($url)){
            $productDetail = Product::where('prod_active',Product::STATUS_PUBLIC)->find($id);
            
            $data['productDetail'] = $productDetail;


            //check giỏ hàng
            $products = \Cart::content();
            $total = \Cart::total(2,'.','');
            $data['productCart'] = $products;
            $data['total'] = $total;
            return view('product.detail',$data);
        }
        return redirect('/');
        
    }
}
