<?php if (!defined('THINK_PATH')) exit();?><title>卧龙腾飞--关于我们</title>
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

<link rel="stylesheet" type="text/css" href="/wltf/Public/css/about.css">
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

<div class="aboutwe">
	<div class="aboutwe_top">
		<a href="#">
			<span class="glyphicon glyphicon-user">关于我们</span>
			<p>></p>
			<p>中心介绍</p>
		</a>
	</div>
	<div class="list">
		<!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><b>卧龙腾飞介绍</b></a></li>
      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><b>一带一路介绍</b></a></li>
      <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><b>联系我们</b></a></li>
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">
        <h1>河南省卧龙腾飞实业有限公司</h1>
        <p>河南省卧龙腾飞实业有限公司是一家服务型管理集团，是一个大的合作共赢体系，其核心在于经营的一带一路国际贸易服务中心，前期依靠兔尔宝娱乐布局全国市场，建立全国连锁运营雏形；公司授权合作企业江苏兔尔宝文化发展有限公司；目前以独立运营河南省一带一路国际贸易服务中心、卧龙腾飞装饰公司、中铁国际多式联运有限公司南阳授权服务机构；预准运营南阳市大学生实训基地、卧龙腾飞休闲旅游、卧龙腾飞中医药产业园、卧龙腾飞超市等。集团战略定位于国内生产销售企业资源整合，打通合作企业间的合作壁障，并积极布局海外战略，依托南阳跨境电商产业园和中国海关南阳综合保税区，旨在建立企业与国际客商的沟通桥梁。在企业发展的过程中得到了区域内领导的高度重视，在项目落地的进程中，给予了大力支持，使得河南省卧龙腾飞实业有限公司能够更稳的扎根南阳，服务社会，形成了一家集国际贸易、游戏娱乐、高新科技，健康产业、培训教育、休闲旅游、装饰设计、极速物流、商超商业综合体等九大产业为一体的综合性集团化公司。</p>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
        <h1>河南省一带一路国际贸易服务中心</h1>
        <p>河南省一带一路国际贸易服务中心位于河南省南阳市卧龙跨境电子商务产业园,是经有关部门批准,为帮助全国中小企业拓展国际发展空间而成立的综合性服务机构。<br>
        自成立以来，中心以“一带一路”战略的“共商、共建、共享”原则为指导，在相关部门大力支持下，整合各方资源，依托南阳的区位优势，积极引导国内企业在国家政策的指引下，参与国际产能合作和经贸投资活动，受到各界广泛好评。<br>
        为更好的服务于企业，中心与南阳卧龙腾飞实业有限公司合作，分别在武汉、重庆、成都等城市设立了分支机构。服务中心目的在于将一带一路“政策沟通、道路联通、贸易畅通、货币流通、 民心相通”的合作重点落到实处，打造国际区域经济产能互溶合作平台。<br>
        目前主要向社会各界提供以下服务<br>
        (一)、通过遍布全国的服务中心及整合的资源和渠道为合作企业业务拓展到国内更大市场。<br>
				(二)、通过跟海外商会、协会等的合作以及利用建设海外仓和国内资源，在国内外搭建商品及服务展示博览会进行海外市场开拓。<br>
				(三)、通过对企业产品及项目服务的输出来塑造提升企业品牌专利的影响力。<br>
				(四)、通过互联网虚拟网络推广，让国内外企业产品面向更多受众，开拓更大市场。<br>
				(五)、帮助企业收集和发布一带一路沿线国家商机以及政策信息。<br>
				(六)、帮助国内企业寻找合作企业，抱团协作进行海外市场开拓。<br>
				(七)、帮助更多做海外市场的中小企业做产品进出口相关服务、物流服务、政经法务服务、金融保险融资服务。<br>
				(八)、帮助企业进行技术以及人才、设备引进，寻找海外合作企业牵线搭桥。<br>
				(九)、针对合作企业运营管理、员工培训、业务推广等需求进行一对一服务。<br>
				(十)、搭建若干个专业化，开放性、机制化的大数据合作平台。为合作的一带一路伙伴提供多元化，个性化，可视化的大数据产品和服务。</p>
      </div>
      <div role="tabpanel" class="tab-pane three" id="messages">
        <h1>联系我们</h1>
        <p>公司地址:中国南阳卧龙跨境电子商务产业园12号楼6层(公交：k8)</p>
        <p>河南省卧龙腾飞实业有限公司联系电话：0377-66086900</p>
        <p>河南省一带一路国际贸易服务中心联系电话：0377-66086800</p>
        <p>邮编:473000</p>
        <div class="map col-xs-12">
        	<!doctype html>
            <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
                <title>设置点的弹跳效果</title>
                <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
                <script src="http://webapi.amap.com/maps?v=1.3&key=您申请的key值"></script>
                <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
            </head>
            <body>
            <div id="container"></div>
            <script>
                var map = new AMap.Map('container', {
                    resizeEnable: true,
                    center: [112.450275,33.033156],
                    zoom: 13
                });
                var marker = new AMap.Marker({
                    position: map.getCenter(),
                    draggable: true,
                    cursor: 'move'
                });
                marker.setMap(map);
                // 设置点标记的动画效果，此处为弹跳效果
                marker.setAnimation('AMAP_ANIMATION_BOUNCE');
            </script>
            </body>
            </html>
        </div>
      </div>
    </div>  
	</div>
</div>
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
</html>