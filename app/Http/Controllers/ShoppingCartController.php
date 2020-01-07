<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Float_;
use PhpParser\Node\Expr\Cast\Double;
use Symfony\Component\Finder\Comparator\NumberComparator;

class ShoppingCartController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAddCart($id){
        $product = Product::find($id);
        if(!$product) return redirect('/');
        \Cart::add([
            'id' => $id, 
            'name' => $product->prod_name, 
            'qty' => 1, 
            'price' => $product->prod_price, 
            'options' => ['avatar' => $product->prod_img]
        ]);

        return redirect()->back();
    }

    public function getListCart(){
        $products = \Cart::content();
        $total = \Cart::total(2,'.','');
        $data['productCart'] = $products;
        $data['total'] = $total;
       // dd($data);
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
}
