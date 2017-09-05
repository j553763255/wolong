<?php if (!defined('THINK_PATH')) exit();?><title>卧龙腾飞--合作伙伴</title>
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
    <!-- 企业合作协议 -->
    <h1 class="text-center ft20 text-info wow fadeInRight" data-wow-delay="0.2s">企业合作协议</h1>
    <div class="con-box wow fadeInLeft" data-wow-delay="0.2s">
        <div class="con-box1">
            <ul class="clearfix">
                <li><a href="javascript:void(0)"><img src="/wltf/Public/images/i1.jpg"></a></li>
                <li><a href="javascript:void(0)"><img src="/wltf/Public/images/i2.jpg"></a></li>
                <li><a href="javascript:void(0)"><img src="/wltf/Public/images/i3.jpg"></a></li>
                <li><a href="javascript:void(0)"><img src="/wltf/Public/images/i4.jpg"></a></li>
                <li><a href="javascript:void(0)"><img src="/wltf/Public/images/i5.jpg"></a></li>
            </ul>
        </div>
        <div class="pn">
            <a class="prev" href="javascript:void(0)"><img src="/wltf/Public/images/prev.png"></a>
            <a class="next" href="javascript:void(0)"><img src="/wltf/Public/images/next.png"></a>
        </div>
    </div>
    <!-- 合作企业 -->
    <div class="ourPartner-box">
        <div class="ourPartner">
            <h1 class="text-center ft20 text-info wow fadeIn" data-wow-delay="0.2s">合作企业</h1>
            <!-- 兔儿宝 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.turboet.com/">江苏兔尔宝<small>（点击进入）</small></a></h2>
                        <p>现阶段，公司的主要业务以“兔尔宝”娱乐平台为主。通过大数据的分析与推广，逐步建立尚惠到家生活超市、卧龙腾飞科技、卧龙腾飞旅游以及各个省市兔尔宝网点的建立。通过垂直化经营，实施纵向共享一体化，完善加盟商合作联盟，优化产业结构，从而达到为客户提供增值服务，实现全新的商业战略同盟。形成以豫西南为中心，建立全国物联网科技...</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.turboet.com/"><img src="/wltf/Public/images/turboet.jpg"></a>
                    </div>
                </div>
            </div>
            <!-- 南阳二机石油装备（集团）有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.ejpetro.com">南阳二机石油装备（集团）有限公司<small>（点击进入）</small></a></h2>
                        <p>南阳二机石油装备（集团）有限公司的前身是中国石化集团河南石油勘探局南阳石油机械厂（原石油工业部第二石油机械厂），2004年6月26日改制，由原来的国有企业变更为有限责任公司。是国家重大技术装备国产化基地、石油轻便钻机国产化基地、国家创新型企业、国家级高新技术企业、国家火炬计划高新技术企业、国家重点新产品试制企业、中国自主创新百强企业、中国石油装备十强企业、纳税信用A级企业、河南省石油钻采装备出口基地和河南省专利申请20强企业,是国际钻井承包商协会会员。拥有全国石油车载装备标准化工作部、行业首个国家级企业技术中心、行业惟一的院士工作站和首个博士后科研工作站等机构。</p>
                        <b>合作内容</b>
                        <p>钻井设备、修井设备、提升系统设备、旋转系统设备、泥浆泵组及泥浆固控系统、控油机等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.ejpetro.com"><img src="/wltf/Public/images/NYEJSYZBJTGFYXGS.PNG"></a>
                    </div>
                </div>
            </div>
            <!-- 卧龙电气南阳防爆集团股份有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.cn-nf.com">卧龙电气南阳防爆集团股份有限公司<small>（点击进入）</small></a></h2>
                        <p>卧龙电气南阳防爆集团股份有限公司（简称“南防集团”）是卧龙电气集团的子公司，中国最大的防爆电机科研生产基地、国家机电产品出口基地、国家创新型企业、国家高新技术企业、中国电器工业协会防爆电机分会理事长单位，全国模范劳动关系和谐企业、全国模范职工之家。现有8个全资、控股子公司，分布于南阳、上海、武汉、郴州，荣登“中国机械500强”、“中国电气工业100强”，市场占有率、经济效益综合指数在全国同行业名列前茅。</p>
                        <b>合作内容</b>
                        <p>电动机、发电机、风机、核级电机等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.cn-nf.com"><img src="/wltf/Public/images/WLDQNYFBJTGFYXGS.png"></a>
                    </div>
                </div>
            </div>
            <!-- 南阳金冠电气有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.nyjinguan.com">南阳金冠电气有限公司<small>（点击进入）</small></a></h2>
                        <p>历经四十年风雨，一路上执着追求。南阳金冠电气有限公司逐步成长为生产历史悠久、工艺技术领先、避雷器市场份额第一的国家级高新技术企业。公司在“特高压、配电网、能源互联网”三大领域，以过硬的质量、优质的服务、领先的技术，走出了自己的“金冠之路”。</p>
                        <b>合作内容</b>
                        <p>各种类型的避雷器、智能配电网、新能源等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.nyjinguan.com"><img src="/wltf/Public/images/NYJGDQ.png"></a>
                    </div>
                </div>
            </div>
            <!-- 南阳市辽原筑路机械有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.lyzj-china.com">南阳市辽原筑路机械有限公司<small>（点击进入）</small></a></h2>
                        <p>南阳市辽原筑路机械有限公司，位于河南省南阳市高新技术产业开发区。，是一个集设计开发、生产、销售、服务于一体的股份制企业，是中国公路建设行业协会筑养路分会会员单位，是河南省高新技术企业。 精心设计、专业打造。产品涵盖沥青混凝土搅拌设备、稳定土厂拌设备、公路养护机械设备等24个品种，具备为国内外公路建设提供成套机械设备的能力。</p>
                        <b>合作内容</b>
                        <p>强制式沥青拌合站、稳定土厂拌系列、再生沥青设备等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.lyzj-china.com"><img src="/wltf/Public/images/NYSLYZLJXYXGS.png"></a>
                    </div>
                </div>
            </div>
            <!-- 仲景宛西制药股份有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.wanxi.cn/">仲景宛西制药股份有限公司<small>（点击进入）</small></a></h2>
                        <p>1978年，仲景宛西制药诞生于医圣张仲景故里、八百里伏牛山南麓的河南南阳。 仲景宛西制药建设了目前国内最大、最先进的中药浓缩丸全自动生产基地，主要生产以“仲景”牌浓缩六味地黄丸、逍遥丸和“月月舒”牌痛经宝颗粒为代表的100多种中成药产品。设立了国家张仲景经方药重点研究室、河南省唯一的中药现代化工程技术研究中心和河南省同行业首家博士后科研工作站，加大对科研开发的投入力度，现已经拥有各类国家发明专利30多项、研发国家级新药10个。</p>
                        <b>合作内容</b>
                        <p>“仲景”牌浓缩六味地黄丸、逍遥丸和“月月舒”牌痛经宝颗粒等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.wanxi.cn/"><img src="/wltf/Public/images/ZJWXZY.png"></a>
                    </div>
                </div>
            </div>
            <!-- 南阳绿莹艾草生物制品有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.moxibustion.cn">南阳绿莹艾草生物制品有限公司<small>（点击进入）</small></a></h2>
                        <p>南阳绿莹艾草生物制品有限公司是专业从事艾草基因储备、繁育、种植、产品研发、生产、制造、内外贸易，以及诊疗与教学研究为一体的多功能、复合式、专业化企业。</p>
                        <b>合作内容</b>
                        <p>美容产品、泡脚产品、艾灸产品等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.moxibustion.com/"><img src="/wltf/Public/images/HNLCJT.png"></a>
                    </div>
                </div>
            </div>
            <!-- 中南钻石有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.diamond-zn.com/index1.html">中南钻石有限公司<small>（点击进入）</small></a></h2>
                        <p>中南钻石有限公司是全球最大的超硬材料制造商，高品质超硬材料粉体、立方氮化硼市场份额世界第一。公司位于中国历史文化名城—南阳。公司以“技术领先，创新未来”为指导，致力于超硬材料系列产品的系统性创新，是中国超硬材料产业技术进步的主要推动力量。公司设有部级技术研发中心，拥有与国际接轨的全套检测设备，质量体系已通过ISO9001国际认证,环境体系已经通过ISO14001认证，产品质量达到国际先进水平。公司以“为顾客创造价值，帮助顾客成功”为理念，与一大批新老客户结成了共谋发展的产业利益联盟，可以长期稳定地为顾客提供具有更高性价比的产品与服务</p>
                        <b>合作内容</b>
                        <p>工业金刚石ZND2200、2100系列、超硬材料镀钛镀钨系列、超硬材料复合片等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.diamond-zn.com/index1.html"><img src="/wltf/Public/images/ZNZS.png"></a>
                    </div>
                </div>
            </div>
            <!-- 河南龙成集团有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.elongcheng.com">河南龙成集团有限公司<small>（点击进入）</small></a></h2>
                        <p>河南龙成集团有限公司创立于1988年，是一家民营股份制高科技企业，集团总部座落于豫、鄂、陕交界的“恐龙之乡”——河南省西峡县城。　　公司始终坚持以创新为企业发展的生命线，从难点立足、于高端起步，实施差异化战略，先后开发出预熔型结晶器保护渣、连铸结晶器铜板、特殊钢板、汽车智能终端等一系列具有自主知识产权的先进技术和产品，由一个仅有十几名员工的深山小作坊发展成为横跨特殊钢铁、煤清洁高效技术应用、机械制造、钢结构、冶金材料、房地产、矿产资源开发、汽车导航、国际贸易、信息技术、旅游等多个行业，员工1万余人、总资产150亿元，下辖12家全资法人企业和2家控股企业的现代企业集团。</p>
                        <b>合作内容</b>
                        <p>汉冶产品、特材产品、冶材产品等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.elongcheng.com/"><img src="/wltf/Public/images/HNLCJT.png"></a>
                    </div>
                </div>
            </div>
            <!-- 南阳市华意电力设备有限公司 -->
            <div class="op-box wow fadeInUp" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <h2 class="ft18"><a class="text-danger" href="http://www.huayidianli.com/">南阳市华意电力设备有限公司<small>（点击进入）</small></a></h2>
                        <p>南阳市华意电力设备有限公司是南阳市电业局和中外合资企业南阳市华意分公司共同创建的股份制企业.公司在积累了20多年电线电缆、热工仪表及自动化生产经验的基础上，为了适应新形势发展的需要和实现集团化经营而创建的,是集设计、开发、研制、生产、销售于一体的规模型的高新技术企业。</p>
                        <b>合作内容</b>
                        <p>35KV及以下交联聚乙烯绝缘电力电缆， 10KV及以下架空绝缘电缆，聚氯乙烯绝缘电力电缆，钢芯铝绞线、塑料控制电缆，电子计算机用屏蔽电缆等</p>
                    </div>
                    <div class="col-sm-4 hidden-xs">
                        <a href="http://www.huayidianli.com/"><img src="/wltf/Public/images/NYSHYDLYXGS.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 分页 -->
        <div class="pagination-box">
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
    <!-- 大图预览 -->
    <div class="big-show-box dis">
        <button class="btn btn-danger btn-lg gb pull-right">X</button>
        <div class="big-show">
            <ul>
                <li class="dis"><a href="javascript:void(0)"><img src="/wltf/Public/images/i1.jpg"></a></li>
                <li class="dis"><a href="javascript:void(0)"><img src="/wltf/Public/images/i2.jpg"></a></li>
                <li class="dis"><a href="javascript:void(0)"><img src="/wltf/Public/images/i3.jpg"></a></li>
                <li class="dis"><a href="javascript:void(0)"><img src="/wltf/Public/images/i4.jpg"></a></li>
                <li class="dis"><a href="javascript:void(0)"><img src="/wltf/Public/images/i5.jpg"></a></li>
            </ul>
        </div>
        <div class="pn1">
            <a class="prev1" href="javascript:void(0)"><img src="/wltf/Public/images/prev.png"></a>
            <a class="next1" href="javascript:void(0)"><img src="/wltf/Public/images/next.png"></a>
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