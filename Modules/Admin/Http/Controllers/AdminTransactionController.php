<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transations = Transaction::with('user:id,name')->paginate(10);
        $data['transations'] = $transations;
        return view('admin::transaction.index',$data);
    }
    public function getOrder(Request $request,$id){
        if($request->ajax()){
            $orders = Order::with('product')->where('or_transaction',$id)->get();
            $html = view('admin::components.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }
}
