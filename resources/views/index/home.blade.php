<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
{{--    <link rel="shortcut icon" href="favicons/1.png') }}">--}}

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ env('app.name', '一飞知媛') }}</title>
    <meta name="description" content="home">
    <meta name="author" content="{{ env('app.author', 'YF')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-4.0.0/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('lib/layui/css/layui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/home/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/home/reset.css') }}">

    <script src="{{ asset('lib/jQuery/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('lib/layui/layui.js') }}"></script>
    <script src="{{ asset('js/index/home/script.js') }}"></script>
    <script src="{{ asset('js/index/home/home.js') }}"></script>
</head>
<body>

<header class="header" id="header">
    <div class="header-bg"></div>
    <div class="header-top">
        <div class="container">
            <a href="#" class="header-logo"></a>
            <nav class="header-nav">
                <a href="" class="item item-cur"><i class="layui-icon layui-icon-home"></i>首页</a>
                <a href="#" class="item layui-icon layui-icon-fire">最新博客</a>
                <a href="#" class="layui-icon layui-icon-edit item new-icon">心随笔<i></i></a>
{{--                <a href="#" class="item">教育</a>--}}
                {{--<a href="#" class="nav-more"></a>
                <div class="nav-more__hover">
                    <div class="wrapper">
                        <div class="top-part">
                            <a href="#">移动应用</a>
                            <a href="#">采集工具</a>
                            <a href="#">招聘</a>
                        </div>
                        <div class="middle-part">
                            <a href="#">UI/UX</a>
                            <a href="#">平面</a>
                            <a href="#">插画/漫画</a>
                            <a href="#">家居/家装</a>
                            <a href="#">女装/搭配</a>
                            <a href="#">男士/风尚</a>
                            <a href="#">婚礼</a>
                            <a href="#">平面</a>
                            <a href="#">工业设计</a>
                            <a href="#"><b>兴趣/生活 »</b></a>
                        </div>
                        <div class="bottom-part">
                            <i class="pin-icon sprite_icon"></i>
                            <a href="#">活动</a>
                            <span class="dot">·</span>
                            <a href="#">周刊</a>
                            <span class="dot">·</span>
                            <a href="#">关于</a>
                            <span class="dot">·</span>
                            <a href="#">反馈</a>
                            <span class="dot">·</span>
                            <a href="#">博客</a>
                        </div>
                    </div>
                </div>--}}
            </nav>
            <div class="header-user">
                <a href="#" class="register">注册</a>
                <a href="#" class="login">登录</a>
            </div>
            <div class="search">
                <form action="#">
                    <input type="text" class="search-text" placeholder="搜索你喜欢的">
                    <a href="#" class="search-btn sprite_icon"></a>
                </form>
            </div>
        </div>
    </div>
    <div class="banner">
        <h2 class="banner-titlte"><img src="{{ asset('/img/index/home/banner-title_img.svg') }}" alt="#"></h2>
        <div class="search">
            <form action="#">
                <input type="text" class="search-text" placeholder="搜索你喜欢的">
                <a href="#" class="search-btn sprite_icon"></a>
            </form>
        </div>
        <p class="search-hot">热门搜索：<a href="#">匠人匠心</a></p>
    </div>
    <div class="header-bg__info">图片：<a href="javascript:">一飞知媛</a></div>
</header>

<div class="main">
    <div class="main-inner">
        <div class="main-list">
            <div class="recommend-line">
                <span>大家正在关注</span>
            </div>
            <div class="main-list__wrapper clearfix">
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img1.jpg') }}" alt="#"><span>PHP</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img2.jpg') }}" alt="#"><span>Go</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img3.jpg') }}" alt="#"><span>MySQL</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img4.jpg') }}" alt="#"><span>编程工具</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img5.jpg') }}" alt="#"><span>心得</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img6.jpg') }}" alt="#"><span>时间流浪</span></a>
                <a href="#"><img src="{{ asset('/img/index/home/cont/main-list__img7.jpg') }}" alt="#"><span>那些年</span></a>
            </div>
        </div>
        <div class="main-waterfall">
            <div class="recommend-line">
                <span>为您推荐</span>
            </div>
            <div class="main-waterfall__wrapper">
                <ul class="flow-default"  id="article_demo"></ul>

               {{-- <div class="main-waterfall__row clearfix">
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img1.jpg') }}" alt="#"></a>
                    </div>
                    <div class="waterfall-box">
                        <div class="waterfall-info waterfall-info__top">
                            <h3><a href="#">乐高蝙蝠侠大电影</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__left"></i>
                        </div>
                        <div class="waterfall-info waterfall-info__bom">
                            <i class="title"></i>
                            <h3><a href="#">【2017开年之作】“稀缺之美”系列</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__right"></i>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box"><a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img2.jpg') }}" alt="#"></a></div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img3.jpg') }}" alt="#"></a>
                        <div class="waterfall-collect">
                            <i class="title"></i>
                            <div class="info">
                                <h4><a href="#">【Gentle.|温存】</a></h4>
                                <p><span>688 采集</span><span>749 粉丝</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-waterfall__row clearfix">
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img4.jpg') }}" alt="#"></a>
                        <div class="waterfall-collect">
                            <i class="title"></i>
                            <div class="info">
                                <h4><a href="#">【Gentle.|温存】</a></h4>
                                <p><span>688 采集</span><span>749 粉丝</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img5.jpg') }}" alt="#"></a>
                    </div>
                    <div class="waterfall-box">
                        <div class="waterfall-info waterfall-info__top">
                            <i class="title"></i>
                            <h3><a href="#">乐高蝙蝠侠大电影</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__left"></i>
                        </div>
                        <div class="waterfall-info waterfall-info__bom">
                            <i class="title"></i>
                            <h3><a href="#">【2017开年之作】“稀缺之美”系列</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__right"></i>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img6.png') }}" alt="#"></a>
                    </div>
                </div>
                <div class="main-waterfall__row clearfix">
                    <div class="waterfall-imgbox waterfall-box"><a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img7.jpg') }}" alt="#"></a></div>
                    <div class="waterfall-box">
                        <div class="waterfall-info waterfall-info__top">
                            <i class="title"></i>
                            <h3><a href="#">乐高蝙蝠侠大电影</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__left"></i>
                        </div>
                        <div class="waterfall-info waterfall-info__bom">
                            <i class="title"></i>
                            <h3><a href="#">【2017开年之作】“稀缺之美”系列</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__right"></i>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box"><a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img8.jpg') }}" alt="#"></a></div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img9.jpg') }}" alt="#"></a>
                        <div class="waterfall-collect">
                            <i class="title"></i>
                            <div class="info">
                                <h4><a href="#">【Gentle.|温存】</a></h4>
                                <p><span>688 采集</span><span>749 粉丝</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-waterfall__row clearfix">
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img10.jpg') }}" alt="#"></a>
                        <div class="waterfall-collect">
                            <i class="title"></i>
                            <div class="info">
                                <h4><a href="#">【Gentle.|温存】</a></h4>
                                <p><span>688 采集</span><span>749 粉丝</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img11.jpg') }}" alt="#"></a>
                    </div>
                    <div class="waterfall-box">
                        <div class="waterfall-info waterfall-info__top">
                            <i class="title"></i>
                            <h3><a href="#">乐高蝙蝠侠大电影</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__left"></i>
                        </div>
                        <div class="waterfall-info waterfall-info__bom">
                            <i class="title"></i>
                            <h3><a href="#">【2017开年之作】“稀缺之美”系列</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__right"></i>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img12.png') }}" alt="#"></a>
                    </div>
                </div>
                <div class="main-waterfall__row clearfix">
                    <div class="waterfall-imgbox waterfall-box"><a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img13.jpg') }}" alt="#"></a></div>
                    <div class="waterfall-box">
                        <div class="waterfall-info waterfall-info__top">
                            <i class="title"></i>
                            <h3><a href="#">乐高蝙蝠侠大电影</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__left"></i>
                        </div>
                        <div class="waterfall-info waterfall-info__bom">
                            <i class="title"></i>
                            <h3><a href="#">【2017开年之作】“稀缺之美”系列</a></h3>
                            <p><span>45 采集</span><span>119 粉丝</span></p>
                            <span>来自<a href="#">华纳兄弟电影</a></span>
                            <i class="info-arrow info-arrow__right"></i>
                        </div>
                    </div>
                    <div class="waterfall-imgbox waterfall-box"><a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img14.png') }}" alt="#"></a></div>
                    <div class="waterfall-imgbox waterfall-box">
                        <a href="#"><img src="{{ asset('/img/index/home/cont/waterfall_img15.jpg') }}" alt="#"></a>
                        <div class="waterfall-collect">
                            <i class="title"></i>
                            <div class="info">
                                <h4><a href="#">【Gentle.|温存】</a></h4>
                                <p><span>688 采集</span><span>749 粉丝</span></p>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
           {{-- <div class="getMore-line">
                <a href="#">加载更多</a>
            </div>--}}
        </div>
        <div class="main-category">
            <div class="head clearfix">
                <span>工具栏</span>
                <a href="#">所有采集 »</a>
            </div>
            <div class="cont clearfix">
                <ul class="main-category__group">
                    <li class="item"><a href="#">UI/UX</a></li>
                    <li class="item"><a href="#">平面</a></li>
                    <li class="item"><a href="#">插画/漫画</a></li>
                    <li class="item"><a href="#">家居/家装</a></li>
                    <li class="item"><a href="#">女装/搭配</a></li>
                    <li class="item"><a href="#">男士/风尚</a></li>
                    <li class="item"><a href="#">婚礼</a></li>
                </ul>
                <ul class="main-category__group">
                    <li class="item"><a href="#">UI/UX</a></li>
                    <li class="item"><a href="#">平面</a></li>
                    <li class="item"><a href="#">插画/漫画</a></li>
                    <li class="item"><a href="#">家居/家装</a></li>
                    <li class="item"><a href="#">女装/搭配</a></li>
                    <li class="item"><a href="#">男士/风尚</a></li>
                    <li class="item"><a href="#">婚礼</a></li>
                </ul>
                <ul class="main-category__group">
                    <li class="item"><a href="#">UI/UX</a></li>
                    <li class="item"><a href="#">平面</a></li>
                    <li class="item"><a href="#">插画/漫画</a></li>
                    <li class="item"><a href="#">家居/家装</a></li>
                    <li class="item"><a href="#">女装/搭配</a></li>
                    <li class="item"><a href="#">男士/风尚</a></li>
                    <li class="item"><a href="#">婚礼</a></li>
                </ul>
                <ul class="main-category__group">
                    <li class="item"><a href="#">UI/UX</a></li>
                    <li class="item"><a href="#">平面</a></li>
                    <li class="item"><a href="#">插画/漫画</a></li>
                    <li class="item"><a href="#">家居/家装</a></li>
                    <li class="item"><a href="#">女装/搭配</a></li>
                    <li class="item"><a href="#">男士/风尚</a></li>
                    <li class="item"><a href="#">婚礼</a></li>
                </ul>
                <ul class="main-category__group">
                    <li class="item"><a href="#">生活百科</a></li>
                    <li class="item"><a href="#">教育</a></li>
                    <li class="item"><a href="#">运动</a></li>
                    <li class="item"><a href="#">搞笑</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer class="footer" id="footer">
    <div class="footer-column__wrapper">
        <div class="footer-column">
            <img src="{{ asset('/img/index/home/social.png') }}" alt="#">
        </div>
        <div class="footer-column footer-followus">
            <b class="title">关注我们</b>
            <p>新浪微博：1374310363@qq.com</p>
            <p>个人 QQ：1374310363</p>
            <p class="weixin">个人微信：<img src="{{ asset('/img/index/home/footer-weixin.png') }}" alt="#"></p>
            <p class="weixin public_weixin">微信公众号：<img src="{{ asset('/img/index/home/footer-weixin.png') }}" alt="#" class="orcode"></p>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 一飞知媛<span class="divider">|</span><i>{{ date('Y-m-d H:i:s') }}</i></p>
    </div>
</footer>

<div class="elevator-wrap">
    <p id="elevator"></p>
    {{--<a href="javascript:;" id="plus"></a>
    <div id="plus_popup">
        <a href="#"><i class="icon-upload"></i>添加采集</a>
        <a href="#"><i class="icon-board"></i>添加画板</a>
        <a href="#"><i class="icon-tool"></i>安装采集工具</a>
    </div>--}}
</div>

<div class="user" id="user">
    <div class="user-inner">
        <img src="{{ asset('/img/index/home/login_logo.png') }}" alt="#" class="login-logo">
        <div class="register">
            <div class="holder">
                <div class="with-line"><span>用第三方帐号注册</span></div>
                <div class="buttons">
                    <a href="#" class="qq"></a>
                    <a href="#" class="weixin"></a>
                </div>
                <a href="#" class="use-email">使用手机号/邮箱注册</a>
            </div>
            <div class="switch-login">已有帐号？<a href="#">请登录</a></div>
        </div>
        <div class="login">
            <div class="holder">
                <div class="with-line"><span>用第三方帐号登录</span></div>
                <div class="buttons">
                    <a href="#" class="qq"></a>
                    <a href="#" class="weixin"></a>
                </div>
                <div class="with-line"><span>使用手机号/邮箱登录</span></div>
                <div class="mail-login">
                    <input type="text" class="text" placeholder="输入手机号或者邮箱">
                    <input type="text" class="password" placeholder="密码">
                    <a href="#" class="login-up">登录</a>
                </div>
                <div class="switch-register clearfix">
                    <a href="#" class="forget">忘记密码»</a>
                    <p class="go-register">还没有帐号？<a href="#">点击注册»</a></p>
                </div>
            </div>
        </div>
        <div class="close"><span></span></div>
    </div>
</div>

</body>
</html>