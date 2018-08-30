<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Config;
use App\Http\Model\Links;
use App\Http\Model\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class IndexController extends CommonController
{
    public function index()
    {
        //最新的6篇文章
        $hot = Article::orderBy('art_view','desc')->take(6)->get();
        //最新发表的6篇文章(图文列表带分页)
        $articles = Article::orderBy('art_time','desc')->leftjoin('category','category.cate_id','=','article.cate_id')->paginate(6);
        //友情链接
        $links = Links::orderBy('link_order','asc')->get();
//        //网站配置项
//        $config = Config::all();
        return view('home.index',compact('hot','hotSmall','articles','new','links'));
    }

    public function cate($cate_id)
    {
        //获取该分类的分类信息
        $field = Category::find($cate_id);
        //最新该分类及其子分类下最新发表的4篇文章(图文列表带分页)
        $categorys =Category::where('cate_pid',$cate_id)->pluck('cate_id')->toarray();
        $categorys[] = (int)$cate_id;//组合所有分类
        $articles = Article::whereIn('cate_id',$categorys)->orderBy('art_time','desc')->paginate(4);
        //获取该分类下的子分类
        $submenu = Category::where('cate_pid',$cate_id)->get();
        //分类查看次数
        Category::where('cate_id',$cate_id)->increment('cate_view');
        return view('home.list',compact('field','articles','submenu'));
    }

    public function article($art_id)
    {
        $field = Article::Join('category','category.cate_id','=','article.cate_id')->where('art_id',$art_id)->first();
        $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
        $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();
        //相关文章
        $aboutArts = Article::where('cate_id',$field->cate_id)->orderBy('art_id','desc')->take(3)->get();
        Article::where('art_id',$art_id)->increment('art_view');
        return view('home.new',compact('field','article','aboutArts'));
    }
    public function aboutUs(){
        return view('home.aboutUs');
    }
    public function message(){
        //最新的6篇文章
        $hot = Article::orderBy('art_view','desc')->take(6)->get();
        //友情链接
        $links = Links::orderBy('link_order','asc')->get();

        return view('home.message',compact('hot','links'));
    }
    public function submitMessage(){
        $input = Input::get();
        $account = htmlentities($input['account'], ENT_QUOTES, 'UTF-8');
        $contact = htmlentities($input['contact'], ENT_QUOTES, 'UTF-8');
        $message = htmlentities($input['message'], ENT_QUOTES, 'UTF-8');
        $data = array('account'=>$account,'contact'=>$contact,'message'=>$message);
        $ret = Message::insert($data);
        if($ret){
            $status = 'ok';
        }else{
            $status = 'error';
        }
        return response()->json($status);
    }
}
