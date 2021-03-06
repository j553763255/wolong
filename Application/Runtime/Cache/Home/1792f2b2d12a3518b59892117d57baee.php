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

</head>
<div class='main clearfix'>
    <div class='banner_top banner_top_service'></div>
    <div class='service_content clearfix'>
        <a name="consultservice"/>
        <div class='main_fl  service_content_01 fl'>
            <div class='main_news clearfix'>
                <p class='main_topline'></p>
                <p class='main_service_top clearfix'>
                    <i class='main_service_inquire'></i><span style='display:inline-block;'>咨询服务</span>
                    <!-- <a href=""target="_blank" title='更多' class='main_news_more fr'>&nbsp;</a> -->
                </p>
                <!-- 内容 begin-->
                <div class='main_service_img'>
                    <script type="text/javascript">
                        Qfast.add('widgets', {
                            path: "js/terminator2.2.min.js"/*tpa=http://www.bigdataobor.com/asset/js/terminator2.2.min.js*/,
                            type: "js",
                            requires: ['fx']
                        });
                        Qfast(false, 'widgets', function () {
                            K.tabs({
                                id: 'imagebox1',   //焦点图包裹id
                                conId: "image1",  //** 大图域包裹id
                                tabId: "imagetext1",
                                tabTn: "a",
                                conCn: '.fcon', //** 大图域配置class
                                auto: 1,   //自动播放 1或0
                                effect: 'fade',   //效果配置
                                eType: 'click', //** 鼠标事件
                                pageBt: true,//是否有按钮切换页码
                                //bns: ['.prev', '.next'],//** 前后按钮配置class
                                interval: 5000  //** 停顿时间
                            })
                        })
                    </script>
                    <div id="imagebox1" class="focus_2">
                        <div id="image1" class="fPic">

                            <div class="fcon" style="display: block;">

                                <a target="_blank" href="show_detail/207.htm"
                                   tppabs="http://www.bigdataobor.com/index.php/service/show_detail/207">
                                    <img src="/wltf/Public/images/news/fe9225b593ae5c6992d91b9ce8b4a7da.jpg"
                                         tppabs="http://www.bigdataobor.com/asset/images/news/fe9225b593ae5c6992d91b9ce8b4a7da.jpg"
                                         style="opacity: 1; ">
                                    <div class="fcon_text">
                                        <h4>
                                            <a href="show_detail.htm"
                                               tppabs="http://www.bigdataobor.com/index.php/service/show_detail/207">
                                                国别研究 </a>
                                            <span>  </span>
                                        </h4>
                                        <p>
                                            国别研究服务，重点分析每个国家的经济和产业发展情况、有潜力的投资领域和行业、需要注意的投资风险等。我们的国别研究，与其他同类研究的不同之处在于，结合互联网大数据分析技术和多语言处理能力，全样本抓取这些国家媒体和网民对我“一带一路”的关注热点、正负面情绪态度，以及对重点合作领域、产业和项目的关注与支持情况等等
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="fbg">
                        </div>
                    </div>
                </div>
                <!-- 内容 end-->

            </div>

            <div class="main_opinion fl">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_finance'></i><span>舆情分析</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/232.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/232" target="_blank">
                            <img class="analyse" src="/wltf/Public/images/news/9110b0902355afcb2d85f1c3f172c194.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/9110b0902355afcb2d85f1c3f172c194.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="main_opinion fr">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_language'></i><span>带路指数</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/233.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/233" target="_blank">
                            <img class="analyse" src="/wltf/Public/images/news/5f356daf94c2216c2f67c68ced34fe6a.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/5f356daf94c2216c2f67c68ced34fe6a.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class=" fr" style='padding:5px 0 0;'>
                <a href="servicelist/175.htm" tppabs="http://www.bigdataobor.com/index.php/service/servicelist/175"
                   target="_blank" title='更多服务' class=' fr'>更多服务>></a>
            </div>

        </div>

        <a name="financeservice"/>
        <div class='main_fl  service_content_01 service_content_bg2 fr'>
            <div class='main_news clearfix'>
                <p class='main_topline'></p>

                <p class='main_service_top clearfix'>
                    <i class='main_service_inquire'></i><span style='display:inline-block;'>金融服务</span>
                    <!-- <a href=""target="_blank" title='更多' class='main_news_more fr'>&nbsp;</a> -->
                </p>

                <!-- 内容 begin-->
                <div class='main_service_img'>
                    <script type="text/javascript">
                        Qfast.add('widgets', {
                            path: "js/terminator2.2.min.js"/*tpa=http://www.bigdataobor.com/asset/js/terminator2.2.min.js*/,
                            type: "js",
                            requires: ['fx']
                        });
                        Qfast(false, 'widgets', function () {
                            K.tabs({
                                id: 'imagebox2',   //焦点图包裹id
                                conId: "image2",  //** 大图域包裹id
                                tabId: "imagetext2",
                                tabTn: "a",
                                conCn: '.fcon', //** 大图域配置class
                                auto: 1,   //自动播放 1或0
                                effect: 'fade',   //效果配置
                                eType: 'click', //** 鼠标事件
                                pageBt: true,//是否有按钮切换页码
                                //bns: ['.prev', '.next'],//** 前后按钮配置class
                                interval: 5000  //** 停顿时间
                            })
                        })
                    </script>
                    <div id="imagebox2" class="focus_2">
                        <div id="image2" class="fPic">

                            <div class="fcon" style="display: block;">

                                <a target="_blank" href="show_detail/208.htm"
                                   tppabs="http://www.bigdataobor.com/index.php/service/show_detail/208">
                                    <img src="/wltf/Public/images/news/e9711128ebc0c6a2c1013bce87257f8b.jpg"
                                         tppabs="http://www.bigdataobor.com/asset/images/news/e9711128ebc0c6a2c1013bce87257f8b.jpg"
                                         style="opacity: 1; ">
                                    <div class="fcon_text">
                                        <h4>
                                            <a href="show_detail/208.htm"
                                               tppabs="http://www.bigdataobor.com/index.php/service/show_detail/208">
                                                跨境清算 </a>
                                            <span>  </span>
                                        </h4>
                                        <p>
                                            钱宝全球贸易金融清算网络，钱宝通过与境外央行实时全额清算系统（RTGS）的直接连接，实现了本币-人民币的直接，实时的清算，为跨境贸易大额结算业务提供了实时，快速，直接的清算网络服务。现阶段钱宝全球贸易金融清算网络已经覆盖全球五大区域，各区域清算圈各自形成区域本币-人民币清算中心。
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="fbg">
                        </div>
                    </div>
                </div>
                <!-- 内容 end-->
            </div>


            <div class="main_opinion fl">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_finance'></i><span>跨境结算</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/239.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/239" target="_blank">
                            <img src="/wltf/Public/images/news/42efb3f2bb7017376b52b5208646cede.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/42efb3f2bb7017376b52b5208646cede.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="main_opinion fr">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_language'></i><span>钱宝丝路贸易卡</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/241.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/241" target="_blank">
                            <img src="/wltf/Public/images/news/b7050fc31336e8c2ab6dbd27bbaf5136.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/b7050fc31336e8c2ab6dbd27bbaf5136.jpg">
                        </a></div>
                </div>
            </div>
            <div class=" fr" style='padding:5px 0 0;'>
                <a href="servicelist/176.htm" tppabs="http://www.bigdataobor.com/index.php/service/servicelist/176"
                   target="_blank" title='更多服务' class=' fr'>更多服务>></a>
            </div>

        </div>

        <a name="languageservice"/>
        <div class='main_fl  service_content_01 fl'>
            <div class='main_news clearfix'>
                <p class='main_topline'></p>
                <p class='main_service_top clearfix'>
                    <i class='main_service_inquire'></i><span style='display:inline-block;'>语言服务</span>
                    <!--   <a href=""target="_blank" title='更多' class='main_news_more fr'>&nbsp;</a> -->
                </p>
                <!-- 内容 begin-->
                <div class='main_service_img'>
                    <script type="text/javascript">
                        Qfast.add('widgets', {
                            path: "js/terminator2.2.min.js"/*tpa=http://www.bigdataobor.com/asset/js/terminator2.2.min.js*/,
                            type: "js",
                            requires: ['fx']
                        });
                        Qfast(false, 'widgets', function () {
                            K.tabs({
                                id: 'imagebox3',   //焦点图包裹id
                                conId: "image3",  //** 大图域包裹id
                                tabId: "imagetext3",
                                tabTn: "a",
                                conCn: '.fcon', //** 大图域配置class
                                auto: 1,   //自动播放 1或0
                                effect: 'fade',   //效果配置
                                eType: 'click', //** 鼠标事件
                                pageBt: true,//是否有按钮切换页码
                                //bns: ['.prev', '.next'],//** 前后按钮配置class
                                interval: 5000  //** 停顿时间
                            })
                        })
                    </script>
                    <div id="imagebox3" class="focus_2">
                        <div id="image3" class="fPic">

                            <div class="fcon" style="display: block;">

                                <a target="_blank" href="show_detail/209.htm"
                                   tppabs="http://www.bigdataobor.com/index.php/service/show_detail/209">
                                    <img src="/wltf/Public/images/news/ea64e4ccab18501dcd477fc6974b18d9.jpg"
                                         tppabs="http://www.bigdataobor.com/asset/images/news/ea64e4ccab18501dcd477fc6974b18d9.jpg"
                                         style="opacity: 1; ">
                                    <div class="fcon_text">
                                        <h4>
                                            <a href="show_detail/209.htm"
                                               tppabs="http://www.bigdataobor.com/index.php/service/show_detail/209">
                                                信息化系统服务 </a>
                                            <span>  </span>
                                        </h4>
                                        <p>
                                            aaaaaa对外提供翻译管理系统服务，翻译管理系统主要由翻译流程管理系统（ELP2）、辅助翻译系统（TCloud）和语料管理系统（WTM）构成，是大数据综合服务平台合作机构传神公司在国内唯一自主开发的集协同翻译、任务管理、服务工具、资料管理于一体的“辅助翻译及管理平台”
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="fbg">
                        </div>
                    </div>
                </div>
                <!-- 内容 end-->
            </div>

            <div class="main_opinion fl">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_finance'></i><span>译员外派</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/235.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/235" target="_blank">
                            <img src="/wltf/Public/images/news/6080b97a22caad7ef5bbee56a32d999f.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/6080b97a22caad7ef5bbee56a32d999f.jpg">
                    </div>
                </div>
            </div>
            <div class="main_opinion fr">
                <p class='main_topline'></p>
                <p class='main_serviceli_top clearfix'>
                    <i class='main_serviceli_language'></i><span>会议交传同传</span>
                </p>
                <div class="main_opinion_table clearfix">
                    <div class="main_opinion_img">
                        <a href="show_detail/237.htm"
                           tppabs="http://www.bigdataobor.com/index.php/service/show_detail/237" target="_blank">
                            <img src="/wltf/Public/images/news/dc8597709c6f0d40fe79e2802ea3511d.jpg"
                                 tppabs="http://www.bigdataobor.com/asset/images/news/dc8597709c6f0d40fe79e2802ea3511d.jpg"></a>
                    </div>
                </div>
            </div>
            <div class=" fr" style='padding:5px 0 0;'>
                <a href="servicelist/177.htm" tppabs="http://www.bigdataobor.com/index.php/service/servicelist/177"
                   target="_blank" title='更多服务' class=' fr'>更多服务>></a>
            </div>

        </div>


    </div>
</div>


<!-- floot end -->


<div class='float_modal' style='display:none;'>
    <div class="o_login_in_wrap">
        <div class="o_login_in">
            <form action="http://www.bigdataobor.com/index.php/login/login_into?back_url=" name="offer_login"
                  method="post">
                <input type="hidden" name="ci_csrf_token" value="">
                <h3>登录系统</h3>
                <div class="o_login_in_con">
                    <div class="o_login_title">用户名</div>
                    <div class="o_login_input">
                        <input type="text" name="account" id="account" autocomplete="off"/>
                    </div>
                    <div class="o_login_title">密码</div>
                    <div class="o_login_input">
                        <input type="password" name="password" id="password" autocomplete="off"/>
                    </div>
                    <div class="o_login_title">验证码</div>
                    <div class="o_login_input">
                        <input type="text" name="cCode" id="cCode" class="f_l mr8" autocomplete="off"/>
                        <span id="ccodeImage" style='width: 90px;'></span><em onclick="changeImage()"></em>
                    </div>
                </div>
                <div class="o_login_btn login_submit"><a href="#">登&nbsp;&nbsp;&nbsp;&nbsp;录</a></div>
                <div class="o_login_error_tips" style=' display: block;'></div>

                <div class="o_login_title">
                    <a href="../login/register.htm" tppabs="http://www.bigdataobor.com/index.php/login/register"
                       target="_blank" style='float: right;'>注册账号</a>
                    <a href="../login/forget_pwd.htm" tppabs="http://www.bigdataobor.com/index.php/login/forget_pwd"
                       target="_blank">忘记密码？</a>
                </div>
            </form>
            <div class="o_login_close"><a href='#'>X</a></div>
        </div>
    </div>
</div>


<script src="js/denglu/offer.js" tppabs="http://www.bigdataobor.com/asset/js/denglu/offer.js"></script>

<script type="text/javascript">
    var token_name = 'ci_csrf_token';
    var csrf_hash = '';
    var url_info = "../login/captcha_code.htm"/*tpa=http://www.bigdataobor.com/index.php/login/captcha_code*/;
</script>
<script type="text/javascript">
    $(document).ready(function () {

        var $footflcountry = $('.floot_content_fl .floot_content_li:eq(0)').remove();
        $footflcountry.insertBefore(".floot_content_fl .floot_content_li:eq(2)");


        var crumbs = $('.main_crumbs>i').attr("class");
        if (crumbs == null || crumbs == "") {

        } else {
            var crumbs = $('.main_crumbs>i').attr("class");
            var loc = crumbs.substring(crumbs.lastIndexOf('_') + 1, crumbs.length);//获取面包屑来源
            var cl = '.' + loc;
            $('.header_nav ').find(cl).parent().addClass('action');  //一级导航选中效果

        }


    });


    function datasearchshow() , 200);
        var bodyh = $(window).height();
        $('body').css({height: bodyh + "px", overflow: 'hidden'});
        changeImage();
    }

    jQuery('.o_login_close a').on('click', function () {
        $('.float_modal').hide();
        $('.o_login_in_wrap').animate({top: '2000'}, 100);
        $('body').css({overflow: 'auto', height: "auto"});
    });

</script>
</body>


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

<!-- END BODY -->