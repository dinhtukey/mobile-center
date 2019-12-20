<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\AddBrandRequest;
use App\Http\Requests\EditBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminBrandController extends Controller
{
    
    public function index()
    {
        $brand = Brand::all();
        return view('admin::brand.index',compact('brand'));
    }
    public function getAdd(){
        return view('admin::brand.add');
    }
    public function postAdd(AddBrandRequest $request){
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = str_slug($request->brand_name);
        $brand->brand_icon = $request->brand_icon;
        $brand->brand_title_seo = $request->brand_title_seo ? $request->brand_title_seo : $request->brand_name;
        $brand->brand_description_seo = $request->brand_description_seo ? $request->brand_description_seo : $request->brand_name; 
        $brand->brand_active = $request->brand_active;

        $brand->save();
        return back()->with('success','Thêm thương hiệu thành công');
    }

    public function getEdit($id){
        $brand = Brand::find($id);
        return view('admin::brand.edit',compact('brand'));
    }
    public function postEdit($id,EditBrandRequest $request){
        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_slug = str_slug($request->brand_name);
        $brand->brand_icon = $request->brand_icon;
        $brand->brand_title_seo = $request->brand_title_seo ? $request->brand_title_seo : $request->brand_name;
        $brand->brand_description_seo = $request->brand_description_seo ? $request->brand_description_seo : $request->brand_name; 
        $brand->brand_active = $request->brand_active;


        $brand->save();
        return redirect('admin/brand')->with('success','Sửa thương hiệu thành công');
    }

    public function getDelete($id){
        Brand::destroy($id);
        return back()->with('success','Xóa thương hiệu thành công');
    }
}










