@extends('layouts.home')
@section('info')
    <title>{{Config::get('web.web_name')}} - {{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <script type="text/javascript" src="{{asset('/home/bootstrap/js/jquery.min.js')}}"></script>
    <link href="{{asset('/home/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('/home/bootstrap/js/bootstrap.js')}}"></script>
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
            <p>留言板</p>
        </h2>
        <div id="fault" class="alert alert-danger alert-dismissible" role="alert" style="display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p id="fault_message"></p>
        </div>
        <div class="bloglist left">
            {{--<form style="margin-top:5%;">--}}
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">您的姓名</label>
                    <input type="text" class="form-control" id="account" placeholder="Your name">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">您的联系方式</label>
                    <input type="text" class="form-control" id="contact" placeholder="Your Phone or Email">
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputFile">您的留言</label>
                    <textarea class="form-control" rows="5" id="message" placeholder="What message you want to say to me"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success" onclick="submitMessage()">提交</button>
                </div>
            {{--</form>--}}
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
    <script type="text/javascript">
        function submitMessage(){
            var account = $("#account").val();
            var contact = $("#contact").val();
            var message = $("#message").val();
            if(account.trim().length <= 0){
                $("#fault_message").html("<strong>Warning! </strong>请输入您的姓名.");
                $("#fault").show();
                return false;
            }
            if(account.trim().length > 30){
                $("#fault_message").html("<strong>Warning! </strong>姓名不允许超过30个字符.");
                $("#fault").show();
                return false;
            }
            if(contact.trim().length <= 0){
                $("#fault_message").html("<strong>Warning! </strong>请输入您的联系方式.");
                $("#fault").show();
                return false;
            }
            if(contact.trim().length > 30){
                $("#fault_message").html("<strong>Warning! </strong>联系方式不允许超过30个字符.");
                $("#fault").show();
                return false;
            }
            if(message.trim().length <= 0){
                $("#fault_message").html("<strong>Warning! </strong>您不想对我说的什么吗？.");
                $("#fault").show();
                return false;
            }
            if(message.trim().length > 255){
                $("#fault_message").html("<strong>Warning! </strong>留言不允许超过255个字符.");
                $("#fault").show();
                return false;
            }
            $("#fault_message").html("");
            $("#fault").hide();
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
            });
            $.ajax({
                type: 'POST',
                url: "/submitMessage",
                dataType: 'json',
                data:'account='+account+"&contact="+contact+'&message='+message+'&code='+Math.round(Math.random()*10000),
                success:function(msg){
                    if(msg == 'ok'){
                        alert("提交留言成功，感谢您的关注！");
                        window.location.href = '/';
                    }else{
                        alert("提交留言失败，请您稍后重试！");
                    }
                }
            });
        }
    </script>
@endsection