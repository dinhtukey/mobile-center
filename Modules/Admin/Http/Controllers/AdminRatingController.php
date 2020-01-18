<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
    public function index(){
        $ratings = Rating::with('user:id,name','product:prod_id,prod_name')->paginate(10);
        $data['ratings'] = $ratings;
        return view('admin::rating.index',$data);
    }
}
