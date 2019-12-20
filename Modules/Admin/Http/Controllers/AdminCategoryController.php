<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $data['listCategory'] = Category::select('cate_id','cate_name','cate_title_seo','cate_active')->get();
        return view('admin::category.index',$data);
    }
    public function getAdd(){
        return view('admin::category.add');
    }
    public function postAdd(AddCateRequest $request){
        $category = new Category();
        $category->cate_name = $request->cate_name;
        $category->cate_slug = str_slug($request->cate_name);
        $category->cate_icon = $request->cate_icon;
        $category->cate_title_seo = $request->cate_title_seo ? $request->cate_title_seo : $request->cate_name;
        $category->cate_description_seo = $request->cate_description_seo ? $request->cate_description_seo : $request->cate_name;
        $category->cate_active = $request->cate_active;

        $category->save();
        return redirect()->back()->with('success','Thêm thành công');
    }

    public function getEdit($id){
        $category = Category::find($id);
        return view('admin::category.edit',compact('category'));
    }
    public function postEdit(EditCateRequest $request,$id){
        $category = Category::find($id);
        $category->cate_name = $request->cate_name;
        $category->cate_slug = str_slug($request->cate_name);
        $category->cate_icon = $request->cate_icon;
        $category->cate_title_seo = $request->cate_title_seo ? $request->cate_title_seo : $request->cate_name;
        $category->cate_description_seo = $request->cate_description_seo ? $request->cate_description_seo : $request->cate_name;
        $category->cate_active = $request->cate_active;

        $category->save();
        return redirect('admin/category')->with('success','Sửa danh mục thành công');
    }

    public function getDelete($id){
        Category::destroy($id);
        return back()->with('success','Xóa danh mục thành công');
    }
}



