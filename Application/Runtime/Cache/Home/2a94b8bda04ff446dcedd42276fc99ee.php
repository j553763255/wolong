<?php if (!defined('THINK_PATH')) exit();?><title>卧龙腾飞--首页</title>
<!--head-->

    <!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/><!-- 可选default、black、black-translucent -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/><!-- 可选default、black、black-translucent -->
    <meta name="applicable-device" content="mobile"/>
    <link rel="stylesheet" type="text/css" href="/wltf/Public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/wltf/Public/css/header_new.css">
    <link rel="stylesheet" type="text/css" href="/wltf/Public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/wltf/Public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/wltf/Public/css/swiper.min.css">
    <link rel="stylesheet" href="/wltf/Public/css/partner.css" />
    <link rel="stylesheet" href="/wltf/Public/css/animate.css">

    <!--<link rel="stylesheet" type="text/css" href="/wltf/Public/css/default.css"/>-->
    <!--<link rel="stylesheet" type="text/css" href="/wltf/Public/css/navipage.css"/>-->
    <!--<link rel="stylesheet" href="/wltf/Public/css/media.css">-->
    <!--<link rel="stylesheet" href="/wltf/Public/css/media1.css">-->
    <!--[if ie 9]>
    <script src="/wltf/Public/js/html5shiv.js"></script>
    <script src="/wltf/Public/js/respond.js"></script>
    <![endif]-->
</head>

<body>
<!-- 顶部 -->

    <div class="header">
    <div class="row">
        <div class="header_top clearfix col-xs-12">
            <p class="pull-left">
                <span>One Belt One Road, Universal Service Platform</span>
            </p>
        </div>
    </div>
    <!--logo -->
    <div class="row logo">
        <div class="col-xs-12">
            <div class="wltf col-sm-3 col-xs-12">
                <a href="#">
                    <img src="/wltf/Public/images/wltf.jpg">
                </a>
            </div>
            <div class="search col-xs-12 col-sm-3 visible-xs">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
              </span>
                </div><!-- /input-group -->
            </div>
            <div class="heading col-sm-9 col-xs-12">
                <div class="col-xs-12">
                    <h3>
                        河南省卧龙腾飞一带一路服务中心
                    </h3>
                    <p>
                        Henan province Wolong Tengfei Belt and Road Initiative Service Center
                    </p>
                </div>
                <div class="search-action col-sm-4 hidden-xs">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
              </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--导航-->

    <div class="row nav_top clearfix hidden-sm">
    <div class="col-xs-12 hidden-xs">
        <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="<?php echo ($vo["class"]); ?>">
                <a href="<?php echo U('home/'.$vo['url'].'/index');?>" class="glyphicon <?php echo ($vo["icon"]); ?>" aria-hidden="true">
                    <?php echo ($vo["name"]); ?>
                </a>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<!--轮播图-->
<div class="swiper-container banner">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <a href="#">
                <img src="/wltf/Public/images/wltfbanner.png">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img src="/wltf/Public/images/ydylbanner.png">
            </a>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<!-- 新闻 -->
<div class="main clearfix">
    <div class="row ">
        <div class="col-xs-12 ">
            <div class="left col-md-8 col-xs-12">
                <div class="left_main col-xs-12">
                    <div class="photos col-md-5 col-xs-12">
                        <div class="swiper-container two">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="http://www.bigdataobor.com/asset/images/news/5e39241db17581c2f533848bc9084706.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="http://www.bigdataobor.com/asset/images/news/5e39241db17581c2f533848bc9084706.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#">
                                        <img src="http://www.bigdataobor.com/asset/images/news/5e39241db17581c2f533848bc9084706.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div class="list col-md-7">
                        <div class="left_top">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                          data-toggle="tab"><b>高层动态</b></a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                                           data-toggle="tab"><b>项目进展</b></a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                                           data-toggle="tab"><b>贸易合作</b></a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <ul>
                                        <li>
                                            <a href="#">中国和印尼举行副总理级对话机制第六次会议</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">汪洋同尼泊尔副总理加查达尔会谈</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">巴基斯坦总统、总理会见汪洋</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">东盟与中日韩（10+3）外长会在马尼拉举行</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">王毅会见俄罗斯外长拉夫罗夫</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">中国与东盟就进一步加强互联互通合作达成共识</a><span>2017-08</span>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <ul>
                                        <li>
                                            <a href="#">雅万高铁EPC合同签署</a><span>2017-04</span>
                                        </li>
                                        <li>
                                            <a href="#">熊波大使同洪森首相共同出席中国援柬国家体育场开...</a><span>2017-04</span>
                                        </li>
                                        <li>
                                            <a href="#">邢海明大使出席雅尔玛格立交桥项目开工仪式</a><span>2017-04</span>
                                        </li>
                                        <li>
                                            <a href="#">中国援助老挝升级改造国家电视台3频道</a><span>2017-03</span>
                                        </li>
                                        <li>
                                            <a href="#">2017年哈萨克斯坦南哈州将建成价值200万美元</a><span>2016-12</span>
                                        </li>
                                        <li>
                                            <a href="#">中白工业园招商工作专题会议在京召开</a><span>2016-12</span>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <ul>
                                        <li>
                                            <a href="#">中国和印尼举行副总理级对话机制第六次会议</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">汪洋同尼泊尔副总理加查达尔会谈</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">巴基斯坦总统、总理会见汪洋</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">东盟与中日韩（10+3）外长会在马尼拉举行</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">王毅会见俄罗斯外长拉夫罗夫</a><span>2017-08</span>
                                        </li>
                                        <li>
                                            <a href="#">中国与东盟就进一步加强互联互通合作达成共识</a><span>2017-08</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="more hidden-xs hidden-sm">
                                <a href="#" title="更多咨询">...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="words col-md-4">
                <div class="words_top">
                    <p class="glyphicon glyphicon-pencil"></p>
                    <p>一带一路热词</p>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-4 col-xs-push-2">
                            <marquee behavior="scroll" direction="up" onmouseover="this.stop();"
                                     onmouseout="this.start();">
                                <ul>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                </ul>
                            </marquee>
                        </div>
                        <div class="col-xs-4 col-xs-push-3">
                            <marquee behavior="scroll" direction="up" onmouseover="this.stop();"
                                     onmouseout="this.start();">
                                <ul>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                    <li>
                                        <a href="#">标题一</a>
                                    </li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 服务 -->
<div class="service_main clearfix">
    <div class="row">
        <div class="col-xs-12">
            <div class="consult col-md-3 col-xs-12">
                <div class="consult_top">
                    <p class="text">咨询服务</p>
                    <p class="glyphicon glyphicon-option-horizontal ddd"></p>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="consult col-md-4 col-xs-12 col-md-offset-1">
                <div class="consult_top">
                    <p class="text">咨询服务</p>
                    <p class="glyphicon glyphicon-option-horizontal ddd"></p>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="consult col-md-3 col-xs-12 col-md-offset-1">
                <div class="consult_top">
                    <p class="text">咨询服务</p>
                    <p class="glyphicon glyphicon-option-horizontal ddd"></p>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
                <div class="row yj">
                    <div class="col-xs-12">
                        <div class="col-md-6 col-md-push-2 col-xs-6">
                            <p>国别研究</p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-xs-6">
                            <p>国别研究</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="footer">
    <div class="row">
        <div class="col-xs-12">
            <div class="footer_content col-xs-1 col-xs-offset-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>新闻</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">高层动态</a>
                    </li>
                    <li>
                        <a href="#">项目进展</a>
                    </li>
                    <li>
                        <a href="#">贸易合作</a>
                    </li>
                    <li>
                        <a href="#">金融合作</a>
                    </li>
                    <li>
                        <a href="#">文化交流</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>政策</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">政策动态</a>
                    </li>
                    <li>
                        <a href="#">政策解读</a>
                    </li>
                    <li>
                        <a href="#">领导讲话</a>
                    </li>
                    <li>
                        <a href="#">国外战略</a>
                    </li>
                    <li>
                        <a href="#">国外政策</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>国别</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">东南亚</a>
                    </li>
                    <li>
                        <a href="#">南亚</a>
                    </li>
                    <li>
                        <a href="#">东亚</a>
                    </li>
                    <li>
                        <a href="#">中东欧</a>
                    </li>
                    <li>
                        <a href="#">俄罗斯</a>
                    </li>
                    <li>
                        <a href="#">西亚北菲</a>
                    </li>
                    <li>
                        <a href="#">中亚</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>数据</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">数据种类</a>
                    </li>
                    <li>
                        <a href="#">基础数据服务</a>
                    </li>
                    <li>
                        <a href="#">数据应用案例</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>服务</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">咨询服务</a>
                    </li>
                    <li>
                        <a href="#">金融服务</a>
                    </li>
                    <li>
                        <a href="#">语言服务</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>1+N合作</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">合作机制</a>
                    </li>
                    <li>
                        <a href="#">合作单位</a>
                    </li>
                </ul>
            </div>
            <div class="footer_content col-xs-1">
                <ul>
                    <li>
                        <a href="#">
                            <h4>关于我们</h4>
                        </a>
                    </li>
                    <li>
                        <a href="#">中心介绍</a>
                    </li>
                    <li>
                        <a href="#">中心动态</a>
                    </li>
                    <li>
                        <a href="#">联系我们</a>
                    </li>
                    <li>
                        <a href="#">高层动态</a>
                    </li>
                    <li>
                        <a href="#">高层动态</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="down">
        <div class="row">
            <div class="col-xs-12">
                <div class="down_line col-xs-5"></div>
                <div class="down_text col-xs-1">
                    <a href="#">联系我们</a>
                </div>
                <div class="down_text col-xs-1">
                    <a href="#">法律声明</a>
                </div>
                <div class="down_line col-xs-5"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/wltf/Public/js/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="/wltf/Public/js/bootstrap.js"></script>
<script type="text/javascript" src="/wltf/Public/js/swiper.jquery.min.js"></script>
<script type="text/javascript" src="/wltf/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/wltf/Public/js/wow.js"></script>
<script type="text/javascript" src="/wltf/Public/js/partner.js"></script>
<script type="text/javascript" src="/wltf/Public/js/koala.min.1.5.js"></script>
<script type="text/javascript" src="/wltf/Public/js/searchkeyword.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
</script>