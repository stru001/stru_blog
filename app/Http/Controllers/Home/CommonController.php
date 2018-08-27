<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Navs;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct()
    {
        $navs = Navs::orderBy('nav_order','asc')->get();//导航栏
        //最新的6篇文章
        $new = Article::orderBy('art_time','desc')->take(6)->get();
        //点击量最高的5篇文章
        $hotSmall = Article::orderBy('art_view','desc')->take(5)->get();
        View::share('navs',$navs);
        View::share('new',$new);
        View::share('hotSmall',$hotSmall);
    }
}
