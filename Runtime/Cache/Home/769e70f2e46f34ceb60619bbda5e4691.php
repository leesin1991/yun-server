<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>易恒云</title>
<meta name="description" content="Coming Soon Responsive Template">
<link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/Home/css/font-awesome.min.css" rel="stylesheet">
<link href="/Public/Home/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/Mall/css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Mall/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Mall/css/purebox.css" />
    <style>
        .sc-redBg-btn{ background:#f42424; border-color:#f42424; color:#fff;}
        .sc-redBg-btn:hover{ background:#ec5051; color:#fff;}
        .login-form .tit h3{ margin:0px;}
        .form .text{ width: 266px; line-height: 25px;}
        .header-login-top{ float: left; padding-left:100px;}
        .header-login-top a{ color:#fff;}
        .header-login-top a:hover{ text-decoration: underline;}
    </style>
</head>
<body>

<!--main-->
<section class="main">
	<div class=" head-info">
        <div class="header-login-top"></div>
  			<ul>
  				<li><a href="<?php echo U('/Mall/brand');?>">品牌</a></li>
  				<li><a href="<?php echo U('/Mall/search/goods');?>">商品</a></li>
  				<li><a href="<?php echo U('/Mall/search/channel');?>">渠道</a></li>
  				<li><a href="<?php echo U('/Mall/Service');?>">服务</a></li>



  			</ul>
  	</div>
  <div class="overlay"></div>
  
  <div class="container">
  	
    <div class="row">
      <div class="col-md-6 col-sm-6"> 
        <!--logo-->
        <div class="logo"><img src="/Public/Home/img/logo.png" data-at2x="img/logo@2x.png" alt="logo"></div>
        <!--logo end--> 
      </div>
      <div class="col-md-6 col-sm-6"> 
        
        <!--social-->
        <!--<div class="social text-center">
          <ul>
            <li><a href="#" target="_blank">登录</a></li>
          </ul>
        </div>-->
        <!--social end--> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12"> 
        
        <!--welcome-message-->
        <header class="welcome-message text-center">
          <h1><span class="rotate">易恒云 , 专注健康，专注服务</span></h1>
        </header>
        <!--welcome-message end--> 
        
        <!--sub-form-->
        <div class="sub-form text-center">
          <div class="row">
            <div class="col-md-5 center-block col-sm-8 col-xs-11">
              <form id="searchForm" name="searchForm" method="get" action="<?php echo U('/Mall/search/goods');?>"  class="search-form">
                <div class="input-group">
                    <div class="search-type" style="display: table-cell; vertical-align: middle">
                        <div class="select-top"><span>商品</span><i></i></div>
                        <ul class="dsc-search-tabs">
                            <li search-type="goods" style="display: none">商品</li>
                            <li search-type="store">店铺</li>
                            <li search-type="channel">渠道</li>
                        </ul>
                    </div>
                    <input class="form-control" placeholder="请输入关键字" name="keywords" type="text" id="keyword" onkeydown=KeyDown()>
                    <input type="hidden" name="search_type" value="goods"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">搜索<i class="fa fa-paper-plane"></i></button>
                    </span>
                </div>
              </form>
              <p id="mc-notification"></p>
            </div>
          </div>
        </div>
        <!--sub-form end--> 
        
        <!-- Countdown-->
        <ul class="countdown text-center">
          <li> <span class="days"><?php echo ($brand_number); ?></span>
            <p class="days_ref">品牌</p>
          </li>
          <li class="seperator">|</li>
          <li> <span class="hours"><?php echo ($channel_number); ?></span>
            <p class="hours_ref">渠道</p>
          </li>
          <li class="seperator">|</li>
          <li> <span class="minutes"><?php echo ($goods_number); ?></span>
            <p class="minutes_ref">SKU</p>
          </li>
          <!--<li class="seperator">|</li>
          <li> <span class="seconds">00</span>
            <p class="seconds_ref">订单</p>
          </li>-->
        </ul>
        <!-- Countdown end--> 
        
      </div>
    </div>
  </div>
</section>
<!--main end--> 

<!--Features-->
<section class="features section-spacing">
  <div class="container">
    <h2 class="text-center">平台服务</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-3 wow fadeInUp product-features">
          <!--<div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-rocket fa-3x"></i></div>-->
          <div class="col-md-12 col-sm-12 col-xs-12"> 
            <!--features 3-->
            <h4>易恒云店</h4>
            <p>服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题</p>
            <!--features 3 end--> 
          </div>
        </div>
        <div class="col-md-3 wow fadeInUp product-features" data-wow-delay="0.1s">
          <!--<div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-bullhorn fa-3x"></i></div>-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!--features 4-->
            <h4>线上平台</h4>
            <p>服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题</p>
            <!--features 4 end--> 
          </div>
        </div>
      
     
        <div class="col-md-3 wow fadeInUp product-features" data-wow-delay="0.3s">
          <!--<div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-bicycle fa-3x"></i></div>-->
          <div class="col-md-12 col-sm-12 col-xs-12"> 
            <!--features 3-->
            <h4>线上渠道</h4>
            <p>服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题</p>
            <!--features 3 end--> 
          </div>
        </div>
        <div class="col-md-3 wow fadeInUp product-features" data-wow-delay="0.5s">
          <!--<div class="col-md-2 col-sm-2 col-xs-2 text-center"><i class="fa fa-paper-plane-o fa-3x"></i></div>-->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!--features 4-->
            <h4>线下分销店</h4>
            <p>服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题服务标题</p>
            <!--features 4 end--> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Features end--> 

<!--Twitter feed-->

<section class="twitter-feed section-spacing text-center">
  <div class="overlay-t"></div>
  <div class="container">
    <div class="row brand-listBot">
      <div class="col-md-12 center-block col-sm-11 col-xs-11">
        <h2 class="font27">国内合作品牌</h2>
        <div class="wow fadeInUp">
        	<ul class="clearfix bus_logo">
        		<li class="wow fadeInUp"><a href="/Mall/brand/detail/id/41.html"><img src="/Public/Home/img/bus_logo1.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="/Mall/brand/detail/id/1.html"><img src="/Public/Home/img/bus_logo2.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="/Mall/brand/detail/id/48.html"><img src="/Public/Home/img/bus_logo3.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="/Mall/brand/detail/id/9.html"><img src="/Public/Home/img/bus_logo4.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="/Mall/brand/detail/id/12.html"><img src="/Public/Home/img/bus_logo5.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#"><img src="/Public/Home/img/bus_logo6.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo7.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><img src="/Public/Home/img/bus_logo8.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo9.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><img src="/Public/Home/img/bus_logo10.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo11.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><img src="/Public/Home/img/bus_logo12.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo13.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo14.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo2.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><img src="/Public/Home/img/bus_logo4.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo5.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.5s"><a href="#">更多&gt;</a></li>
        	</ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 center-block col-sm-11 col-xs-11">
        <h2 class="font27">国外合作品牌</h2>
        <div class="wow fadeInUp" data-wow-delay='0.5s'>
        	<ul class="clearfix bus_logo">
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo1.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo2.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><img src="/Public/Home/img/bus_logo3.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><img src="/Public/Home/img/bus_logo4.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo5.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#"><img src="/Public/Home/img/bus_logo6.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo7.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><img src="/Public/Home/img/bus_logo8.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo9.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><img src="/Public/Home/img/bus_logo10.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo11.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><img src="/Public/Home/img/bus_logo12.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo13.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo14.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><img src="/Public/Home/img/bus_logo2.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><img src="/Public/Home/img/bus_logo4.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp"><a href="#"><img src="/Public/Home/img/bus_logo5.jpg"/><span><b>点击进入</b></span></a></li>
        		<li class="wow fadeInUp" data-wow-delay="0.5s"><a href="#">更多&gt;</a></li>
        	</ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Twitter feed end--> 

<!--CONTACT-->

<section class="contact section-spacing" id="contact">
  <div class="container">
    <h2 class="text-center">渠道合作</h2>
    <div class="row mt50">
      <div class="col-md-12 center-block col-sm-11 col-xs-11">
        <div class="wow fadeInUp">
        	<div class="col-lg-12 qudao">
        		<a href="#" class="col-md-2">京东</a>
	        	<a href="#" class="col-md-2">天猫</a>
	        	<a href="#" class="col-md-2">网易考拉</a>
	        	<a href="#" class="col-md-2">唯品会</a>
	        	<a href="#" class="col-md-2">网易考拉</a>
	        	<a href="#" class="col-md-2">唯品会</a>
	        	<a href="#" class="col-md-2">网易考拉</a>
	        	<a href="#" class="col-md-2">唯品会</a>
	        	<a href="#" class="col-md-2">唯品会</a>
	        	<a href="#" class="col-md-2">网易考拉</a>
	        	<a href="#" class="col-md-2">唯品会</a>
	        	<a href="#" class="col-md-2 qd-more">更多 &gt;</a>
        	</div>
        	
        </div>
      </div>
    </div>
  </div>
</section>

<!--CONTACT END--> 

<!--site-footer-->
<footer class="site-footer section-spacing">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">        
        <small class="wow fadeInUp">© 2015 All rights reserved. More Templates</small> </div>
    </div>
  </div>
</footer>
<!--site-footer end--> 

<!--PRELOAD-->
<div id="preloader">
  <div id="status"></div>
</div>
<!--end PRELOAD--> 

<script src="/Public/Home/js/jquery-1.11.1.min.js"></script> 
<script src="/Public/Home/js/jquery.backstretch.min.js"></script> 
<script src="/Public/Home/js/wow.min.js"></script> 
<script src="/Public/Home/js/retina.min.js"></script> 
<script src="/Public/Home/js/tweetie.min.js"></script> 
<!--<script src="js/jquery.downCount.js"></script>--> 
<script src="/Public/Home/js/jquery.form.min.js"></script> 
<script src="/Public/Home/js/jquery.validate.min.js"></script> 
<script src="/Public/Home/js/jquery.simple-text-rotator.min.js"></script> 
<script src="/Public/Home/js/main.js"></script>

<!--<script type="text/javascript" src=/Public/Mall/js/utils.js"></script>-->
<script type="text/javascript" src="/Public/Mall/js/jquery.json.js"></script>
<script type="text/javascript" src="/Public/Mall/js/transport_jquery.js"></script>
<script type="text/javascript" src="/Public/Mall/js/dsc-common.js"></script>

<script type="text/javascript" src="/Public/Mall/js/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/Public/Mall/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/Mall/js/jquery.purebox.js"></script>
<script type="text/javascript" src="/Public/Mall/js/suggest.js"></script>
<script type="text/javascript" src="/Public/Mall/js/warehouse.js"></script>
<script type="text/javascript" src="/Public/Mall/js/warehouse_store.js"></script>
<script type="text/javascript" src="/Public/Mall/js/region_new.js"></script>
<script type="text/javascript" src="/Public/Mall/js/cart_common.js"></script>
<script type="text/javascript" src="/Public/Mall/js/jquery.yomi.js"></script>

<script type="text/javascript" src="/Public/Mall/js/cart_quick_links.js"></script>
<script type="text/javascript" src="/Public/Mall/js/common_new.js"></script>
<script type="text/javascript" src="/Public/Mall/js/compare.js"></script>
<script type="text/javascript" src="/Public/Mall/js/parabola.js"></script>
<script type="text/javascript" src="/Public/Mall/js/shopping_flow.js"></script>
<script type="text/javascript" src="/Public/Mall/js/jd_choose.js"></script>


<script type="text/javascript" src="/Public/Mall/js/asyLoadfloor.js"></script>
<script type="text/javascript" src="/Public/Mall/js/jquery.purebox.js"></script>

<script type="text/javascript">
    var json_languages = {"ok":"确定","determine":"确定","cancel":"取消","drop":"删除","edit":"编辑","remove":"移除","follow":"关注","pb_title":"提示","Prompt_information":"提示信息","title":"提示","not_login":"您尚未登录","close":"关闭","cart":"购物车","js_cart":"购物车","all":"全部","go_login":"去登陆","select_city":"请选择市","comment_goods":"评论商品","submit_order":"提交订单","sys_msg":"系统提示","no_keywords":"请输入搜索关键词！","adv_packup_one":"请去后台广告位置","adv_packup_two":"里面设置广告！","more":"更多","Please":"请去","set_up":"设置！","login_phone_packup_one":"请输入手机号码","more_options":"更多选项","Pack_up":"收起","no_attr":"没有更多属性了","search_Prompt":"可输入汉字,拼音查找品牌","most_input":"最多只能选择5项","multi_select":"多选","checkbox_Packup":"请收起全部多选","radio_Packup":"请收起全部单选","contrast":"对比","empty_contrast":"清空对比栏","Prompt_add_one":"最多只能添加4个哦^_^","Prompt_add_two":"您还可以继续添加","button_compare":"比较选定商品","exist":"您已经选择了%s","count_limit":"最多只能选择4个商品进行对比","goods_type_different":"%s和已选择商品类型不同无法进行对比","compare_no_goods":"您没有选定任何需要比较的商品或者比较的商品数少于2个。","btn_buy":"购买","is_cancel":"取消","select_spe":"请选择商品属性","Province":"请选择所在省份","City":"请选择所在市","District":"请选择所在区域","Street":"请选择所在街道","Detailed_address_null":"详细地址不能为空","Select_attr":"请选择属性","Focus_prompt_one":"您已关注该店铺！","Focus_prompt_login":"您尚未登录商城会员，不能关注！","Focus_prompt_two":"登录商城会员。","store_focus":"店铺关注。","Focus_prompt_three":"您确实要关注所选店铺吗？","Focus_prompt_four":"您确实要取消关注店铺吗？","Focus_prompt_five":"您要关注该店铺吗？","Purchase_quantity":"超过限购数量.","My_collection":"我的收藏","shiping_prompt":"该地区暂不支持配送","Have_goods":"有货","No_goods":"无货","No_shipping":"无法配送","Deliver_back_order":"下单后立即发货","Time_delivery":"时发货","goods_over":"此商品暂时售完","Stock_goods_null":"商品库存不足","purchasing_prompt_two":"对不起，该商品已经累计超过限购数量","day_not_available":"当日无货","day_yes_available":"当日有货","Already_buy":"已购买","Already_buy_two":"件商品达到限购条件无法再购买","Already_buy_three":"件该商品只能再购买","goods_buy_empty_p":"商品数量不能少于1件","goods_number_p":"商品数量必须为数字","search_one":"请填写筛选价格","search_two":"请填写筛选左边价格","search_three":"请填写筛选右边价格","search_four":"左边价格不能大于或等于右边价格","jian":"件","letter":"件","inventory":"存货","move_collection":"移至我的收藏","select_shop":"请选择套餐商品","Parameter_error":"参数错误","screen_price":"请填写筛选价格","screen_price_left":"请填写筛选左边价格","screen_price_right":"请填写筛选右边价格","screen_price_dy":"左边价格不能大于或等于右边价格","invoice_ok":"保存*屏蔽的关键字*信息","invoice_desc_null":"输入内容不能为空！","invoice_desc_number":"您最多可以添加3个公司*屏蔽的关键字*！","invoice_packup":"请选择或填写*屏蔽的关键字*抬头部分！","invoice_tax_null":"请填写纳税人识别码","add_address_10":"最多只能添加10个收货地址","msg_phone_not":"手机号码不正确","captcha_not":"验证码不能为空","captcha_xz":"请输入4位数的验证码","captcha_cw":"验证码错误","Detailed_map":"详细地图","email_error":"邮箱格式不正确！","bid_prompt_null":"价格不能为空!","bid_prompt_error":"价格输入格式不正确！","mobile_error_goods":"手机格式不正确！","null_email_goods":"邮箱不能为空","select_store":"请选择门店！","Product_spec_prompt":"请选择商品规格类型","reply_desc_one":"回复帖子内容不能为空","go_shoping":"去购物","no_history":"您已清空最近浏览过的商品","receive_coupons":"领取优惠券","Immediate_use":"立即使用","no_enabled":"关闭"};
    //加载效果
    var load_cart_info = '<img src="/Public/Mall/images/load/loadGoods.gif" height="108" class="ml100">';
    var load_icon = '<img src="/Public/Mall/images/load/load.gif" width="200" height="200">';

</script>
<!--<script src="js/gmap.js"></script>-->
<script type="text/javascript">
    $(function () {
        $(".search-type").hover(function () {
            $(this).find(".dsc-search-tabs").show();
        },function () {
            $(this).find(".dsc-search-tabs").hide();
        });

        $(".dsc-search-tabs li").click(function(){
            var _text = $(this).text();
            $(".select-top").find("span").text(_text);
            $(this).parents(".dsc-search-tabs").hide();

            $("input[name='search_type']").val($(this).attr("search-type"));
            var search_url = $("#searchForm").attr("action");
            var search_url_str = search_url.substring(0,search_url.indexOf('search/')+7);
            var new_url = search_url_str+$(this).attr("search-type")+".html";
            $("#searchForm").attr("action",new_url);
            $(".dsc-search-tabs li").show();
            $(".dsc-search-tabs li[search-type='"+$(this).attr("search-type")+"']").hide();
        });
    });

    function KeyDown()
    {
        if (event.keyCode == 13)
        {
            $("#searchForm").submit();
        }
    }


    function loginAjax() {
        Ajax.call('/Mall/Home/getUid', '',function(data){
            if(data==0){
                $(".header-login-top").html('<a href="javascript:user_login()">登陆</a>');
            }else{
                $(".header-login-top").html('<span>您好 &nbsp;<a><?php echo ($user_name); ?></a></span><span>，欢迎来到&nbsp;<a alt="首页" title="首页" href="/mall/index">易恒云</a></span><span>[<a href="/home/public/logout">退出</a>]</span>');
            }
        } ,'POST', 'JSON');
    }
    loginAjax();
    setInterval(function(){
        loginAjax();
    },180000);
</script>
</body>
</html>