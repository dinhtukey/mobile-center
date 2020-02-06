<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
    public function index(Request $request){
        $ratings = Rating::with('user:id,name','product:prod_id,prod_name');
        if($request->name){
            $result = $request->name;
            $result = str_replace('','%',$result);
            $ratings = $ratings->join('products','ra_product','=','products.prod_id')->where('prod_name','like','%'.$result.'%');
        }
        $ratings = $ratings->paginate(10);
        $data['ratings'] = $ratings;
        return view('admin::rating.index',$data);
    }
}
