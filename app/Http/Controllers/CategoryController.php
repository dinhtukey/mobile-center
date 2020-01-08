<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getListProduct(Request $request){
        $url = $request->segment(2);
        $url = preg_split('/(-)/i',$url);
        if($id=array_pop($url)){
            $productByCate = Product::where([
                'prod_cate' => $id,
                'prod_active' => Product::STATUS_PUBLIC
            ])->orderByDesc('prod_id')->paginate(10);
            $cateName = Category::find($id);
            $data['productByCate'] = $productByCate;
            $data['cateName'] = $cateName;

            //check giỏ hàng
            $products = \Cart::content();
            $total = \Cart::total(2,'.','');
            $data['productCart'] = $products;
            $data['total'] = $total;
            return view('product.index',$data);
        }
        return redirect('/');
    }
}
