<?php if (!defined('THINK_PATH')) exit();?><title>卧龙腾飞--分支机构</title>
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
    <!--<script type="text/javascript" src="/wltf/Public/js/jquery-1.12.2.min.js"></script>-->
    <!--<script type="text/javascript" src="/wltf/Public/js/koala.min.1.5.js"></script>-->
    <!--<script type="text/javascript" src="/wltf/Public/js/searchkeyword.js"></script>-->
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

<div id="wrap">
    <!-- 合作机构 -->
    <div class="our-machanism-box">
        <form action="#" method="post" class="macha-form clearfix">
            <div class="pull-left">
                <label for="sort">排序：</label>
                <select name="sort" id="sort">
                    <option value="1">按名称</option>
                    <option value="2">按姓名</option>
                </select>
                <button class="btn btn-primary btn-sm sure">确定</button>
            </div>
            <div class="pull-right text-right">
                <input type="text" name="search" class="search" placeholder="请输入名称或者关键字">
                <button class="btn btn-success search1 btn-sm">搜索</button>
            </div>
        </form>
        <!-- 线条 -->
        <div class="line">
            <img src="/wltf/Public/images/line.png" width="100%" />
        </div>
        <!-- 办事处 -->
        <div class="con-section">
            <div class="section1">
                <h1 class="ft16">安徽合肥办事处<span class="pull-right rotate"></span></h1>
                <div class="section-nr">
                    <div class="clearfix">
                        <div class="col-xs-8 secnr-top">
                            <ul>
                                <li>
                                    <img src="/wltf/Public/images/i1.jpg" >
                                    <span><b>负责人：Michael</b></span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span>地址：安徽省合肥市</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span>联系电话：12345678911</span>
                                </li>
                            </ul>
                            <!-- 查看 -->
                            <div class="login">
                                <a href="#"><button class="btn">查看</button></a>
                                <a href="#"><button class="btn">登陆</button></a>
                            </div>
                        </div>
                        <div class="col-xs-4 secnr-bottom">
                            <a href="#"><img src="/wltf/Public/images/i1.jpg" class="img-rounded" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section1">
                <h1 class="ft16">安徽合肥办事处<span class="pull-right"></span></h1>
                <div class="section-nr dis">
                    <div class="clearfix">
                        <div class="col-xs-8 secnr-top">
                            <ul>
                                <li>
                                    <img src="/wltf/Public/images/i1.jpg" >
                                    <span><b>负责人：Michael</b></span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span>地址：安徽省合肥市</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span>联系电话：12345678911</span>
                                </li>
                            </ul>
                            <!-- 查看 -->
                            <div class="login">
                                <a href="#"><button class="btn">查看</button></a>
                                <a href="#"><button class="btn">登陆</button></a>
                            </div>
                        </div>
                        <div class="col-xs-4 secnr-bottom">
                            <a href="#"><img src="/wltf/Public/images/i1.jpg" class="img-rounded" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section1">
                <h1 class="ft16">安徽合肥办事处<span class="pull-right"></span></h1>
                <div class="section-nr dis">
                    <div class="clearfix">
                        <div class="col-xs-8 secnr-top">
                            <ul>
                                <li>
                                    <img src="/wltf/Public/images/i1.jpg" >
                                    <span><b>负责人：Michael</b></span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span>地址：安徽省合肥市</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span>联系电话：12345678911</span>
                                </li>
                            </ul>
                            <!-- 查看 -->
                            <div class="login">
                                <a href="#"><button class="btn">查看</button></a>
                                <a href="#"><button class="btn">登陆</button></a>
                            </div>
                        </div>
                        <div class="col-xs-4 secnr-bottom">
                            <a href="#"><img src="/wltf/Public/images/i1.jpg" class="img-rounded" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section1">
                <h1 class="ft16">安徽合肥办事处<span class="pull-right"></span></h1>
                <div class="section-nr dis">
                    <div class="clearfix">
                        <div class="col-xs-8 secnr-top">
                            <ul>
                                <li>
                                    <img src="/wltf/Public/images/i1.jpg" >
                                    <span><b>负责人：Michael</b></span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span>地址：安徽省合肥市</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span>联系电话：12345678911</span>
                                </li>
                            </ul>
                            <!-- 查看 -->
                            <div class="login">
                                <a href="#"><button class="btn">查看</button></a>
                                <a href="#"><button class="btn">登陆</button></a>
                            </div>
                        </div>
                        <div class="col-xs-4 secnr-bottom">
                            <a href="#"><img src="/wltf/Public/images/i1.jpg" class="img-rounded" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section1">
                <h1 class="ft16">安徽合肥办事处<span class="pull-right"></span></h1>
                <div class="section-nr dis">
                    <div class="clearfix">
                        <div class="col-xs-8 secnr-top">
                            <ul>
                                <li>
                                    <img src="/wltf/Public/images/i1.jpg" >
                                    <span><b>负责人：Michael</b></span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span>地址：安徽省合肥市</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span>联系电话：12345678911</span>
                                </li>
                            </ul>
                            <!-- 查看 -->
                            <div class="login">
                                <a href="#"><button class="btn">查看</button></a>
                                <a href="#"><button class="btn">登陆</button></a>
                            </div>
                        </div>
                        <div class="col-xs-4 secnr-bottom">
                            <a href="#"><img src="/wltf/Public/images/i1.jpg" class="img-rounded" width="100%" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 分页 -->
            <div class="pagination-box text-center">
                <ul class="pagination">
                    <li><a href="javascript:void(0)">&laquo;</a></li>
                    <li><a href="javascript:void(0)">1</a></li>
                    <li><a href="javascript:void(0)">2</a></li>
                    <li><a href="javascript:void(0)">3</a></li>
                    <li><a href="javascript:void(0)">......</a></li>
                    <li><a href="javascript:void(0)">5</a></li>
                    <li><a href="javascript:void(0)">6</a></li>
                    <li><a href="javascript:void(0)">&raquo;</a></li>
                </ul>
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

<script>
    new WOW().init();
</script>
</body>
</html>