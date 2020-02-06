<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
<<<<<<< HEAD
    public function index(Request $request){
        $ratings = Rating::with('user:id,name','product:prod_id,prod_name');
        if($request->name){
            $result = $request->name;
            $result = str_replace('','%',$result);
            $ratings = $ratings->join('products','ra_product','=','products.prod_id')->where('prod_name','like','%'.$result.'%');
        }
        $ratings = $ratings->paginate(10);
=======
    public function index(){
        $ratings = Rating::with('user:id,name','product:prod_id,prod_name')->paginate(10);
>>>>>>> 59878e1a80017db78dd020f6eb27118b57509d21
        $data['ratings'] = $ratings;
        return view('admin::rating.index',$data);
    }
}
