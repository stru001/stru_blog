@extends('layouts.home')
@section('info')
    <title>关于我们 - {{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="简历、关于我、关于我们、我们" />
    <meta name="description" content="对个人情况的一些简介、主要展示个人简历" />

    <link href="{{asset('resources/views/home/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('resources/views/home/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/style-about.css')}}" rel="stylesheet" type="text/css" media="all" />

    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="{{asset('resources/views/home/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/easing.js')}}"></script>

@endsection
@section('content')
    <article class="blogs">
        <h1 class="t_nav"><span>您当前的位置：<a href="/">首页</a>&nbsp;&gt;&nbsp;<a href="{{url('aboutUs')}}">关于我们</a></span></h1>
        <div class="banner-figures">
            <div class="banner-about">
                <div class="container banner-drop">
                    <div class="header">
                        <div class="header-left logo">
                            <h1><a href="{{url('/aboutUs')}}">About Me</a></h1>
                        </div>
                        <div class="header-right">
                            <nav>
                                <ul>
                                    <li class="active">
                                        <a href="index.html" class="active"><span>Home</span></a>
                                    </li>
                                    <li>
                                        <a href="#about" class="scroll"><span>About</span></a>
                                    </li>
                                    <li>
                                        <a href="#experience" class="scroll"><span>Experience</span></a>
                                    </li>
                                    <li>
                                        <a href="#projects" class="scroll"><span>Projects</span></a>
                                    </li>
                                    <li>
                                        <a href="#contact" class="scroll"><span>Contact</span></a>
                                    </li>
                                </ul>
                            </nav>
                            {{--<div class="menu-icon animated wow zoomIn" data-wow-duration="1000ms" data-wow-delay="800ms"><span></span></div>--}}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="name" >
                        <h2>Stru</h2>
                        <p> PHP Developer & Project Manager & Enterprise Opera…</p>
                    </div>
                    <div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
                        {{--<ul class="top-links">--}}
                            {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                    <div class="banner-left-wthree">
                        <!-- <img src="{{url('resources/views/home/images/banner-btm.jpg')}}" alt=" " class="img-responsive"> -->
                        <ul class="address">

                            <li>
                                <ul class="address-text">
                                    <li><b>NAME</b></li>
                                    <li>: Stru（勾文平）</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>D.O.B</b></li>
                                    <li>: 13-10-1991</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>ADDRESS </b></li>
                                    <li>: 北京市大兴区亦庄</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>PHONE </b></li>
                                    <li><a href="struphp@sina.com">: 17600258121</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>E-MAIL </b></li>
                                    <li><a href="struphp@sina.com">: struphp@sina.com</a></li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="address">

                            <li>
                                <ul class="address-text">
                                    <li><b>NAME</b></li>
                                    <li>: LuLu（陈晓露）</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>D.O.B</b></li>
                                    <li>: 01-12-1992</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>ADDRESS </b></li>
                                    <li>: 北京市大兴区亦庄</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>PHONE </b></li>
                                    <li><a href="luluphp@sina.com">: 17600258905</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>E-MAIL </b></li>
                                    <li><a href="luluphp@sina.com">: luluphp@sina.com</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
            </div>
        </div>
        <!-- //banner -->
        <!-- 技能相关 -->
        <div class="about" id="about" style="margin-bottom: 30px;">
            <div class="container">
                <h4 class="title-w3ls">个人简介（About Me）</h4>
                <p class="para-w3-agile">很荣幸你能看到我的博客，作为一名平凡但热情的码农闲暇之余喜欢总结点知识或者感悟在这里进行分享希望不被你讨厌。</p>
                <p class="para-w3-agile">介绍自己很痛苦，会写代码会卖萌、会打球能逗乐、会跟同事并肩完成既定的目标当然更喜欢在头脑风暴中获得更新颖的东西。</p>
                <div class="skills-bar">
                    <h4 class="title-w3ls">个人技能（My Skills）</h4>
                    <section class='bar'>
                        <section class='wrap'>
                            <div class='wrap_right'>
                                <div class='bar_group'>
                                    <div class='bar_group__bar thin' label='PHP' show_values='true' tooltip='true' value='500'></div>
                                    <div class='bar_group__bar thin' label='MYSQL' show_values='true' tooltip='true' value='480'></div>
                                    <div class='bar_group__bar thin' label='jQuery' show_values='true' tooltip='true' value='470'></div>
                                    <div class='bar_group__bar thin' label='AJAX' show_values='true' tooltip='true' value='460'></div>
                                    <div class='bar_group__bar thin' label='HTML' show_values='true' tooltip='true' value='440'></div>
                                </div>
                            </div>
                            <div class='clear'></div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
        <!--工作经历-->
        <div id="experience" class="experience">
            <div class="container">
                <h4 class="title-w3ls">工作经历（Work Experience）</h4>
                <div class="work-info">
                    <div class="col-md-6 work-left">
                        <h4>2016 - 至今 </h4>
                    </div>
                    <div class="col-md-6 work-right">
                        <h5><span class="glyphicon glyphicon-briefcase"> </span> PHP开发</h5>
                        <p>主要负责PHP开发工作，涉及MYSQL、JavaScript、JQuery、HTML、CSS技术
                            同时和C++层、java层进行交互获取设备信息、设置设备、以及Echarts使用。
                            主要研发的产品有：TMS影院管理系统、激光巨幕放映品质展示系统。</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="work-info">
                    <div class="col-md-6 work-right work-right2">
                        <h4>2013 - 2016 </h4>
                    </div>
                    <div class="col-md-6 work-left work-left2">
                        <h5>企业运维 & 项目管理 & PHP开发<span class="glyphicon glyphicon-briefcase"></span></h5>
                        <p>主要负责企业100个点左右的网络搭建及维护、服务器、计算机、打印机、投影机、监控系统的维护
                            同时担任汽车研发项目的项目管理，主要研究了制定并推行了项目管理办法规范项目管理工作
                            最后自学PHP并向PHP开发转型并与外包人员共同开发OA</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="work-info">
                    <div class="col-md-6 work-left">
                        <h4>2012 - 2013 </h4>
                    </div>
                    <div class="col-md-6 work-right">
                        <h5><span class="glyphicon glyphicon-briefcase"> </span> 连锁餐饮企业运维</h5>
                        <p>主要负责多家门店的计算机、打印机、点菜机、进销存管理系统、监控系统、网络以及VPN的正常使用</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- 项目经历 -->
        <div class="projects" id="projects">
            <div class="container">
                {{--<span class="about-top-w3">The best of my projects </span>--}}
                <h4 class="title-w3ls">项目简介（Some Projects）</h4>
                <div class="news-bottom">
                    <div class="news-one-wthree-agile">
                        <div class="col-md-6 news-right">
                            <a href="#three"><h4>TMS影院管理系统</h4></a>
                            <p class="para-w3-agile">主要负责TMS3.0系统中的单厅监控、排期管理、映前广告管理</p>
                        </div>
                        <div class="col-md-6 news-left">
                            <div class="biseller-column">
                                <a class="lightbox" href="#three">
                                    <img src="{{url('resources/views/home/images/p2.jpg')}}" alt=""/>
                                </a>
                                <div class="lightbox-target" id="three">
                                    <img src="{{url('resources/views/home/images/p2.jpg')}}" alt=""/>
                                    <p class="pop">主要负责TMS3.0系统中的单厅监控、排期管理、映前广告管理</p>
                                    <a class="lightbox-close" href="#"> </a>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="news-one-wthree-agile">
                        <div class="col-md-6 news-left">
                            <div class="biseller-column">
                                <a class="lightbox" href="#two">
                                    <img src="{{url('resources/views/home/images/p3.jpg')}}" alt=""/>
                                </a>
                                <div class="lightbox-target" id="two">
                                    <img src="{{url('resources/views/home/images/p3.jpg')}}" alt=""/>
                                    <p class="pop">主要负责用户登录、用户管理、权限管理模块的开发</p>
                                    <a class="lightbox-close" href="#"></a>

                                    <div class="clearfix"> </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 news-right">
                            <a href="#two"><h4>OA办公系统</h4></a>
                            <p class="para-w3-agile">主要负责用户登录、用户管理、权限管理模块的开发</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 联系方式 -->
        {{--<div class="contact" id="contact">--}}
            {{--<div class="container">--}}
                {{--<span class="about-top-w3">Send me a message</span>--}}
                {{--<h4 class="title-w3ls">Contact Me</h4>--}}
                {{--<div class="col-md-5 contact-agileits-w3layouts">--}}
                    {{--<form action="#" method="post">--}}
                        {{--<input type="text" name="Your Name" placeholder="Name" required="" />--}}
                        {{--<input type="email" name="Your Email" placeholder="Email" required="" />--}}
                        {{--<input type="text" Name="Phone Number" placeholder="Number" required=""/>--}}
                        {{--<textarea name="Message" placeholder="Message" required=""></textarea>--}}
                        {{--<input type="submit" value="Submit">--}}
                    {{--</form>--}}
                    {{--<h5 class="sub">Looking for Address</h5>--}}
                    {{--<p><span>Location</span> : 345 Setwant natrer,Washington,US.</p>--}}
                    {{--<p><span>Phone</span> : +33 892 35 35 35</p>--}}
                    {{--<p><span>Email</span><a href="mailto:example@mail.com"> : mail@example.com</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- //about -->

        {{--<div class="footer">--}}
            {{--<div class="container">--}}
                {{--<p>© 2017 Elegant Resume. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>--}}
            {{--</div>--}}
        {{--</div>--}}

    </article>
    <script type="text/javascript" src="{{asset('resources/views/home/js/bars.js')}}"></script>
@endsection


