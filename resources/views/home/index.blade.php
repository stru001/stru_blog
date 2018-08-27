@extends('layouts.home')
@section('info')
    <title>{{Config::get('web.web_name')}} - {{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
@endsection
@section('content')
    <div class="banner">
        <section class="box">
            <ul class="texts">
                <p>有个如你一般的人，如山间清爽的风，如古城温暖的光。</p>
                <p>从清晨到夜晚，由山野到书房。</p>
                <p>只要最后是你，就好！</p>
            </ul>
            <div class="avatar"><a href="#"><span>StruPHP</span></a> </div>
        </section>
    </div>
    <div class="template">
        <div class="box">
            <h3>
                <p><span>站长</span>推荐 Recomend</p>
            </h3>
            <ul>
                @foreach($hot as $k=>$v)
                    <li><a href="{{url('art/'.$v->art_id)}}"  target="_blank"><img src="{{asset($v->art_thumb)}}"></a><span>{{$v->art_title}}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <article class="blogs">
        <h2 class="title_tj">
            <p>文章<span>推荐</span></p>
        </h2>
        <div class="bloglist left">
            @foreach($articles as $k=>$v)
            <h3>{{$v->title}}</h3>
            <figure><img src="{{asset($v->art_thumb)}}"></figure>
            <ul>
                <p>{{$v->art_description}}...</p>
                <a title="{{$v->title}}" href="{{url('art/'.$v->art_id)}}" target="_blank" class="readmore">阅读全文>></a>
            </ul>
            <p class="dateview"><span>{{date('Y-m-d',$v->art_time)}}</span><span>作者：{{$v->art_editor}}</span><span>StruPHP博客：[{{$v->cate_name}}</a>]</span></p>
            @endforeach
            <div class="page">
                {{$articles->links()}}
            </div>
        </div>
        <aside class="right">
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
            </script>
            <!-- Baidu Button END -->
            <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
            <div class="news">
                @parent
                <h3 class="links">
                    <p>友情<span>链接</span></p>
                </h3>
                <ul class="website">
                    @foreach($links as $v)
                    <li><a href="{{$v->link_url}}" target="_blank">{{$v->link_name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </article>
@endsection