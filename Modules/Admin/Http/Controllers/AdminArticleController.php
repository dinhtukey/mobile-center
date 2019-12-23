<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\AddArticleRequest;
use App\Http\Requests\EditArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        if($request->name){
            $result = $request->name;
            $result = str_replace('','%',$result);
            $article = Article::where('art_name','like','%'.$result.'%')->orderByDesc('id')->paginate(10);
        }
        else{
            $article = Article::orderByDesc('id')->paginate(10);
        }
        $data['artList'] = $article;
        
        return view('admin::article.index',$data);
    }

    public function getAdd(){
        return view('admin::article.add');
    }
    public function postAdd(AddArticleRequest $request){
        $filename = $request->art_img->getClientOriginalName();
        $article = new Article();
        $article->art_name = $request->art_name;
        $article->art_slug = str_slug($request->art_name);
        $article->art_img = $filename;
        $article->art_active = $request->art_active;
        $article->art_description = $request->art_description;
        $article->art_content = $request->art_content;
        $article->art_title_seo = $request->art_title_seo;
        $article->art_description_seo = $request->art_description_seo;

        $article->save();
        $request->art_img->storeAs('avatar',$filename);
        return back()->with('success','Thêm bài viết thành công');
    }

    public function getEdit($id){
        $article = Article::find($id);
        return view('admin::article.edit',compact('article'));
    }
    public function postEdit($id,EditArticleRequest $request){
        $article = Article::find($id);
        $article->art_name = $request->art_name;
        $article->art_slug = str_slug($request->art_name);
        $article->art_active = $request->art_active;
        $article->art_description = $request->art_description;
        $article->art_content = $request->art_content;
        $article->art_title_seo = $request->art_title_seo;
        $article->art_description_seo = $request->art_description_seo;
        if($request->hasFile('art_img')){
            $img = $request->art_img->getClientOriginalName();
            $article->art_img = $img;
            $request->art_img->storeAs('avatar',$img);
        }

        $article->save();
        return redirect('admin/article')->with('success','Sửa bài viết thành công');
    }
    public function getAction($action, $id)
    {
        if ($action) {
            $article = article::find($id);
            switch ($action) {
                case 'delete':
                    Article::destroy($id);
                    return back()->with('success', 'Xóa sản phẩm thành công');
                    break;
                case 'active':
                    $article->art_active = $article->art_active ? 0 :1;
                    break;
            }
            $article->save();
        }
        return back();
    }

}
