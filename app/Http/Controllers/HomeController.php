<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontEndController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $productFeatured = Product::where([
            'prod_featured' => Product::FEATURED_PUBLIC,
            'prod_active' => Product::STATUS_PUBLIC
        ])->limit(5)->orderByDesc('prod_id')->get();
        
        $articleNews = Article::orderByDesc('id')->limit(6)->get();
        $data['productFeatured'] = $productFeatured;
        $data['articleNews'] = $articleNews;
        return view('home.index',$data);
    }
}
