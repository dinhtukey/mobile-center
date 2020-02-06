<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function saveRating(Request $request,$id){
        if($request->ajax()){
            Rating::insert([
                'ra_product' => $id,
                'ra_number' => $request->number,
                'ra_content' => $request->r_content,
                'ra_user' => get_data_user('web'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $product = Product::find($id);
            $product->prod_total_number +=$request->number;
            $product->prod_total_rating +=1;
            $product->save();

            return response()->json(['code'=>'danh_gia_xong']);
            
        }
    }
}
