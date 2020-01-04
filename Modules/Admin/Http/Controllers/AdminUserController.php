<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = User::whereRaw(1);
        $user = $user->orderBy('id','desc')->paginate(10);
        $data['user'] = $user;
        return view('admin::user.index',$data);
    }

    
}
