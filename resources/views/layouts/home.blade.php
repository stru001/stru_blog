<!doctype html>
<html>
<head>
    <meta name="baidu-site-verification" content="aoCeeeaoeM" />
    <meta name="360-site-verification" content="1808c104f5091a783e5af47e383a09fc" />
    <meta charset="utf-8">
    @yield('info')
    <link href="{{asset('resources/views/home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/new.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div id="logo"><a href="{{url('/')}}"></a></div>
    <nav class="topnav" id="topnav">
        @foreach($navs as $k=>$v)
            <a href="{{$v->nav_url}}"><span>{{$v->nav_name}}</span><span class="en">
                    {{$v->nav_alias}}</span>
            </a>
        @endforeach
    </nav>
</header>

@section('content')
    <h3>
        <p>最新<span>文章</span></p>
    </h3>
    <ul class="rank">
        @foreach($new as $v)
            <li><a href="{{url('art/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
        @endforeach
    </ul>
    <h3 class="ph">
        <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
        @foreach($hotSmall as $v)
            <li><a href="{{url('art/'.$v->art_id)}}" title="{{$v->art_title}}" target="_blank">{{$v->art_title}}</a></li>
        @endforeach
    </ul>
@show
<footer>
    <p>{!!Config::get('web.coypright')!!} <a href="/"> 网站统计： {!!Config::get('web.web_count')!!} </a></p>
</footer>
<script>(function(){
var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?d1142a817ef92d2dac018ec9385fd510":"https://jspassport.ssl.qhimg.com/11.0.1.js?d1142a817ef92d2dac018ec9385fd510";
document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>
</body>
</html>
