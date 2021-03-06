<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/base_new.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/purebox.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/quickLinks.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/suggest.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/css/select.css" />
<link rel="stylesheet" type="text/css" href="/Public/Mall/js/perfect-scrollbar/perfect-scrollbar.min.css" />

<script type="text/javascript">
		var json_languages = {"ok":"确定","determine":"确定","cancel":"取消","drop":"删除","edit":"编辑","remove":"移除","follow":"关注","pb_title":"提示","Prompt_information":"提示信息","title":"提示","not_login":"您尚未登录","close":"关闭","cart":"购物车","js_cart":"购物车","all":"全部","go_login":"去登陆","select_city":"请选择市","comment_goods":"评论商品","submit_order":"提交订单","sys_msg":"系统提示","no_keywords":"请输入搜索关键词！","adv_packup_one":"请去后台广告位置","adv_packup_two":"里面设置广告！","more":"更多","Please":"请去","set_up":"设置！","login_phone_packup_one":"请输入手机号码","more_options":"更多选项","Pack_up":"收起","no_attr":"没有更多属性了","search_Prompt":"可输入汉字,拼音查找品牌","most_input":"最多只能选择5项","multi_select":"多选","checkbox_Packup":"请收起全部多选","radio_Packup":"请收起全部单选","contrast":"对比","empty_contrast":"清空对比栏","Prompt_add_one":"最多只能添加4个哦^_^","Prompt_add_two":"您还可以继续添加","button_compare":"比较选定商品","exist":"您已经选择了%s","count_limit":"最多只能选择4个商品进行对比","goods_type_different":"%s和已选择商品类型不同无法进行对比","compare_no_goods":"您没有选定任何需要比较的商品或者比较的商品数少于2个。","btn_buy":"购买","is_cancel":"取消","select_spe":"请选择商品属性","Province":"请选择所在省份","City":"请选择所在市","District":"请选择所在区域","Street":"请选择所在街道","Detailed_address_null":"详细地址不能为空","Select_attr":"请选择属性","Focus_prompt_one":"您已关注该店铺！","Focus_prompt_login":"您尚未登录商城会员，不能关注！","Focus_prompt_two":"登录商城会员。","store_focus":"店铺关注。","Focus_prompt_three":"您确实要关注所选店铺吗？","Focus_prompt_four":"您确实要取消关注店铺吗？","Focus_prompt_five":"您要关注该店铺吗？","Purchase_quantity":"超过限购数量.","My_collection":"我的收藏","shiping_prompt":"该地区暂不支持配送","Have_goods":"有货","No_goods":"无货","No_shipping":"无法配送","Deliver_back_order":"下单后立即发货","Time_delivery":"时发货","goods_over":"此商品暂时售完","Stock_goods_null":"商品库存不足","purchasing_prompt_two":"对不起，该商品已经累计超过限购数量","day_not_available":"当日无货","day_yes_available":"当日有货","Already_buy":"已购买","Already_buy_two":"件商品达到限购条件无法再购买","Already_buy_three":"件该商品只能再购买","goods_buy_empty_p":"商品数量不能少于1件","goods_number_p":"商品数量必须为数字","search_one":"请填写筛选价格","search_two":"请填写筛选左边价格","search_three":"请填写筛选右边价格","search_four":"左边价格不能大于或等于右边价格","jian":"件","letter":"件","inventory":"存货","move_collection":"移至我的收藏","select_shop":"请选择套餐商品","Parameter_error":"参数错误","screen_price":"请填写筛选价格","screen_price_left":"请填写筛选左边价格","screen_price_right":"请填写筛选右边价格","screen_price_dy":"左边价格不能大于或等于右边价格","invoice_ok":"保存*屏蔽的关键字*信息","invoice_desc_null":"输入内容不能为空！","invoice_desc_number":"您最多可以添加3个公司*屏蔽的关键字*！","invoice_packup":"请选择或填写*屏蔽的关键字*抬头部分！","invoice_tax_null":"请填写纳税人识别码","add_address_10":"最多只能添加10个收货地址","msg_phone_not":"手机号码不正确","captcha_not":"验证码不能为空","captcha_xz":"请输入4位数的验证码","captcha_cw":"验证码错误","Detailed_map":"详细地图","email_error":"邮箱格式不正确！","bid_prompt_null":"价格不能为空!","bid_prompt_error":"价格输入格式不正确！","mobile_error_goods":"手机格式不正确！","null_email_goods":"邮箱不能为空","select_store":"请选择门店！","Product_spec_prompt":"请选择商品规格类型","reply_desc_one":"回复帖子内容不能为空","go_shoping":"去购物","no_history":"您已清空最近浏览过的商品","receive_coupons":"领取优惠券","Immediate_use":"立即使用","no_enabled":"关闭"};
//加载效果
var load_cart_info = '<img src="/Public/Mall/images/load/loadGoods.gif" height="108" class="ml100">';
var load_icon = '<img src="/Public/Mall/images/load/load.gif" width="200" height="200">';
	
</script>

<script type="text/javascript" src="/Public/Mall/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/Public/Mall/js/utils.js"></script>
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






<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body <?php if($is_cart): ?>class="bg-ligtGary"<?php endif; ?>>
	<!-- 头部 -->
	<div class="site-nav" id="site-nav" data-userid="<?php echo ($user_id); ?>">
    <div <?php if($is_short_menu): ?>class="w w1200"<?php else: ?>class="w w1200"<?php endif; ?>>
        <div class="fl">
			<div class="txt-info" id="ECS_MEMBERZONE">
                <?php if($user_id == 0): ?><a href="javascript:user_login()" class="link-login red">请登录</a>
                <?php else: ?>
                <span>您好 &nbsp;<a><?php echo ($user_name); ?></a></span>
                <span>，欢迎来到&nbsp;<a alt="首页" title="首页" href="/mall/index">易恒云</a></span>
                <span>[<a href="/mall/public/logout">退出</a>]</span><?php endif; ?>

            </div>
        </div>
        <ul class="quick-menu fr">
            <li>
                <div class="dt"><a href="<?php echo U('/Mall/brand');?>">品牌</a></div>
            </li>
            <li class="spacer"></li>
            <li>
                <div class="dt"><a href="<?php echo U('/Mall/search/goods');?>">商品</a></div>
            </li>
            <li class="spacer"></li>
            <li>
                <div class="dt"><a href="<?php echo U('/Mall/search/channel');?>">渠道</a></div>
            </li>
            <li class="spacer"></li>
            <li>
                <div class="dt"><a href="<?php echo U('/Mall/Service');?>">服务</a></div>
            </li>            
        </ul>
    </div>
</div>

<!--购物车头部-->
<?php if($is_cart): ?><div class="header header-cart">
	<?php if($is_check): ?><div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="/mall"><img src="/Public/Mall/images/logo.png" /></a></div>
            <div class="tit">结算页</div>
        </div>
        <div class="cart-stepflex">
	        <div class="cart-step-item cur">
	            <span>1.我的购物车</span>
	            <i class="iconfont icon-arrow-right-alt"></i>
	        </div>
	        <div class="cart-step-item curr">
	            <span>2.填写订单信息</span>
	            <i class="iconfont icon-arrow-right-alt"></i>
	        </div>
	        <div class="cart-step-item ">
	            <span>3.成功提交订单</span>
	        </div>
	    </div>
    </div>
    <?php elseif($is_orderSuccess): ?>
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="/mall"><img src="/Public/Mall/images/logo.png"></a></div>
            <div class="tit">结算页</div>
        </div>
                <div class="cart-stepflex">
            <div class="cart-step-item cur">
                <span>1.我的购物车</span>
                <i class="iconfont icon-arrow-right-alt"></i>
            </div>
            <div class="cart-step-item cur">
                <span>2.填写订单信息</span>
                <i class="iconfont icon-arrow-right-alt"></i>
            </div>
            <div class="cart-step-item curr">
                <span>3.成功提交订单</span>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="w w1200">
        <div class="logo">
            <div class="logoImg"><a href="/mall"><img src="/Public/Mall/images/logo.png" /></a></div>
            <div class="tit">购物车（<em ectype="cartNum"></em>）</div>
        </div>
        <div class="dsc-search">
            <ul class="dsc-search-tab clearfix">
                <li class="current" search-type="goods">商品</li>
                <li search-type="store">店铺</li>
                <li search-type="channel">渠道</li>
            </ul>
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="<?php echo U('/Mall/search/goods');?>" onSubmit="return checkSearchForm()" class="search-form">
                    <input autocomplete="off" onkeyup="lookup(this.value)" name="keywords" type="text" id="keyword" value="<?php echo ($keyword); ?>"  class="search-text" placeholder="输入关键字"/>
                    <input type="hidden" name="store_search_cmt" value="0">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜索</button>
                    <input type="hidden" name="search_type" value="goods" />
                </form>
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>    
    </div><?php endif; ?>
</div>
<?php else: ?>
<!--其它头部-->
<div class="header">
    <div <?php if($is_short_menu): ?>class="w w1200"<?php else: ?>class="w w1200"<?php endif; ?>>
        <div class="logo">
            <div class="logoImg"><a href="/mall"><img src="/Public/Mall/images/logo.png" /></a></div>
				<!--<div class="logoAdv"><a href="#"><img src="/Public/Mall/images/ecsc-join.gif" /></a></div>-->
	        </div>
        <div class="dsc-search">
        	<ul class="dsc-search-tab clearfix">
        		<li class="current" search-type="goods">商品</li>
        		<li search-type="store">店铺</li>
        		<li search-type="channel">渠道</li>
        	</ul>
            <div class="form">
                <form id="searchForm" name="searchForm" method="get" action="<?php echo U('/Mall/search/goods');?>" onSubmit="return checkSearchForm()" class="search-form">
                    <input autocomplete="off" onkeyup="lookup(this.value)" name="keywords" type="text" id="keyword" value="<?php echo ($keyword); ?>"  class="search-text" placeholder="输入关键字"/>
                    <input type="hidden" name="store_search_cmt" value="0">
                    <button type="submit" class="button button-goods" onclick="checkstore_search_cmt(0)" >搜索</button>
                    <input type="hidden" name="search_type" value="goods" />
                </form>
                <div class="suggestions_box" id="suggestions" style="display:none;">
                    <div class="suggestions_list" id="auto_suggestions_list">
                        &nbsp;
                    </div>
                </div>                
            </div>
        </div>
        <div class="shopCart" data-ectype="dorpdown" id="ECS_CARTINFO" data-carteveval="0">        
			<div class="shopCart-con dsc-cm">
                <a href="/Mall/Cart">
					<i class="iconfont icon-carts"></i>
					<span>我的购物车</span>
					<em class="count cart_num">0</em>
				</a>
			</div>
			<div class="dorpdown-layer" ectype="dorpdownLayer">
	        	<div class="prompt"><div class="nogoods"><b></b><span>购物车中还没有商品，赶紧选购吧！</span></div></div>
	    </div>	
			       
        </div>
    </div>
</div>

<div class="nav dsc-zoom" ectype="dscNav">
    <div <?php if($is_short_menu): ?>class="w w1200"<?php else: ?>class="w w1200"<?php endif; ?>>
        <div <?php if($is_show_category): ?>class="categorys"<?php else: ?>class="categorys site-mast"<?php endif; ?>>
            <div class="categorys-type"><a href="/Mall/Category/categorylist" target="_blank">全部商品分类</a></div>
            <div class="categorys-tab-content">
            	<div class="categorys-items" id="cata-nav">
					<?php if(is_array($goods_list)): $i = 0; $__LIST__ = $goods_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g_o): $mod = ($i % 2 );++$i;?><div class="categorys-item" ectype="cateItem" data-id="858" data-eveval="0">
				        <div class="item item-content">
	                        <i class="iconfont icon-ele"></i>
	                        <div class="categorys-title">
	                			<strong>
	                                <a href="<?php echo U('category/index?id='.$g_o['id']);?>" target="_blank"><?php echo ($g_o["name"]); ?></a>
	                            </strong>
	                        </div>
				        </div>
				        <div class="categorys-items-layer" ectype="cateLayer">
				            <div class="cate-layer-con clearfix">
				                <div class="cate-layer-left">
				                    <div class="cate_channel" ectype="channels_858">
				                    	<ul class="h4 clearfix">
				                    		<?php if(is_array($g_o["_child"])): $i = 0; $__LIST__ = $g_o["_child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f_v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('category/index?id='.$f_v['id']);?>" target="_blank"><?php echo ($f_v["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				                    	</ul>
										
											<!--<a href="<?php echo U('category/index?id='.$f_v['id']);?>" target="_blank"><?php echo ($f_v["name"]); ?></a>-->
										
									</div>
				                    <div class="cate_detail" ectype="subitems_858">
														
										<div class="brand-channel clearfix" id="h-brand_0" data-type="range" data-lift="品牌"> 
											<div ectype="homeBrand">
											    <div class="brand-list" id="recommend_brands" data-value="204,93,110,113,116,195,79,95,76,126,73,122,98,82,101,85,105">
										        	<ul>
														<?php if(is_array($g_o["brand"])): $i = 0; $__LIST__ = $g_o["brand"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a_v): $mod = ($i % 2 );++$i;?><li>
											                <div class="brand-img"><a href="<?php echo U('brand/detail?id='.$a_v['id']);?>" target="_blank"><img src="<?php echo ($a_v["logo"]); ?>"/></a></div>
											                <div class="brand-mash">													                    
											                    <div class="coupon"><a href="<?php echo U('brand/detail?id='.$a_v['id']);?>" target="_blank"><?php echo ($a_v["brand_name"]); ?></a></div>
											                </div>
											            </li><?php endforeach; endif; else: echo "" ;endif; ?>
								                    </ul>
								        			<!--<a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>-->
											    </div>
											</div>
											<div class="spec" data-spec="" data-title="undefined"></div>
				                        </div>							
									</div>
				                </div>						                
				            </div>
				        </div>
				        <div class="clear"></div>
				    </div><?php endforeach; endif; else: echo "" ;endif; ?>

	        	</div>            
	        </div>
	    </div>
    	<div class="nav-main" id="nav">
            <ul class="navitems">
                <li><a href="/Mall/Index" class="curr">首页</a></li>
                <li><a href="/Mall/Brand"  >品牌专区</a></li>
                <li><a href="/Mall/country"  >国家馆</a></li>
                <li><a href="<?php echo U('category/index',array('id'=>0,'is_cross'=>3));?>"  >保税产品</a></li>
                <li><a href="<?php echo U('category/index',array('id'=>0,'is_cross'=>1));?>"  >国内产品</a></li>
                <li><a href="/Mall/category/index/id/0/is_cross/3,4"  >跨境产品</a></li>
                <li><a href="/Mall/Channel/"  >渠道专区</a></li>
                <li><a href="/Mall/Service"  >服务专区</a></li>
            </ul>
        </div>
    </div>
</div><?php endif; ?>

<script type="text/javascript">
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    }
    //tab切片，高亮搜索块当前切片选项
    var s_type = getQueryString("search_type");
    if(s_type!=null){
        $("input[name='search_type']").val(s_type);
        var search_url = $("#searchForm").attr("action");
        var search_url_str = search_url.substring(0,search_url.indexOf('search/')+7);
        var new_url = search_url_str+s_type+".html";
        $("#searchForm").attr("action",new_url);
        $(".dsc-search-tab li").each(function () {
            if($(this).attr("search-type")==s_type){
                $(this).addClass('current').siblings().removeClass('current');
            }
        });
    }


    //高亮导航
    var win_url = window.location.pathname;
//    $(".navitems li").each(function () {
//        var a_url = $(this).find("a").attr("href");
//        if(win_url.indexOf(a_url)>=0){
//            $(".navitems li a").removeClass("curr");
//            $(this).find("a").addClass("curr");
//        }
//    });


    if(win_url.indexOf('Mall/Index')>-1||win_url.indexOf('Mall/Index.html')>-1||win_url.indexOf('Mall/index')>-1){
        hightNav(0);
    }

    if(win_url.indexOf('/Mall/Brand')>-1||win_url.indexOf('/mall/brand')>-1||win_url.indexOf('/Mall/brand')>-1){
        hightNav(1);
    }

    if(win_url.indexOf('/Mall/country')>-1||win_url.indexOf('/mall/country')>-1||win_url.indexOf('/Mall/Country')>-1){
        hightNav(2);
    }

    if(win_url.indexOf('is_cross/3')>-1){
        hightNav(3);
    }

    if(win_url.indexOf('is_cross/1')>-1){
        hightNav(4);
    }

    if(win_url.indexOf('/is_cross/3,4')>-1){
        hightNav(5);
    }

    if(win_url.indexOf('/Mall/Channel')>-1||win_url.indexOf('/mall/Channel')>-1||win_url.indexOf('/Mall/Channel')>-1){
        hightNav(6);
    }

    if(win_url.indexOf('/Mall/Service')>-1||win_url.indexOf('/mall/Service')>-1||win_url.indexOf('/mall/Service')>-1){
        hightNav(7);
    }


    function hightNav(_index) {
        $(".navitems li a").removeClass("curr");
        $(".navitems li a").eq(_index).addClass("curr");
    }

</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
	
	<script type="text/javascript">
	$(function(){
		"<?php echo I('style');?>"
		var _style = "<?php echo I('style');?>";
		console.log(_style)
		var _url = window.location.href;
		var s_str = _url.indexOf('style');		
		var style_str = _url.substring(s_str+6,s_str+7);
		if(s_str>=0){
			var b_str = _url.substring(0,s_str+6);
		}else{
			var b_str = _url.substring(0);
		}		
		var e_str = _url.substring(s_str+7);
		
		var _htmlLen = -1;
		var p_str = _url.indexOf('.html');
		var p_str_2 = _url.indexOf('.htm');
		if(p_str>=0){
			_htmlLen = p_str;
		}else if(p_str_2>=0){
			_htmlLen = p_str_2;
		}
		var p_before = _url.substring(0,_htmlLen);
		
		var main = $("*[ectype='gMain']");
		if(_style=="g"||_style==""){
			$("*[ectype='fsortTab'] .item").first().addClass("current");
			main.find(".gl-warp-large").show();
			main.find(".gl-warp-samll").hide();
			if(_style=="g"){				
				var newUrl =b_str+"l"+ e_str;
				$("*[ectype='fsortTab'] .item").last().find("a").attr("href",newUrl);
			}
			if(_style==""){
				if(_htmlLen>=0){
					var newUrl = p_before+"/style/"+"l";
					$("*[ectype='fsortTab'] .item").last().find("a").attr("href",newUrl);
				}else{
					var newUrl = b_str+"/style/"+"l";
					$("*[ectype='fsortTab'] .item").last().find("a").attr("href",newUrl);
				}				
			}			
		}else if(_style=="l"){
			$("*[ectype='fsortTab'] .item").last().addClass("current");
			main.find(".gl-warp-large").hide();
			main.find(".gl-warp-samll").show();		
			var newUrl = b_str+"g"+e_str;
			$("*[ectype='fsortTab'] .item").first().find("a").attr("href",newUrl);			
		}else{
			$("*[ectype='fsortTab'] .item").first().addClass("current");
			main.find(".gl-warp-large").show();
			main.find(".gl-warp-samll").hide();
			var newUrl = b_str+"l";
			$("*[ectype='fsortTab'] .item").last().find("a").attr("href",newUrl);
		}
	})
		
		
	</script>
    <div class="container">
    	<div class="w1390 brand-top-logo">
    	   <div class="brand-top-logo-left">
    	   	  <div class="b-logo-s"><span><img src="<?php echo ($brand_info["logo"]); ?>"></span></div>
    	   	  <div class="b-logo-name"><?php echo ($brand_info["brand_name"]); ?></div>
    	   	  <div class="b-logo-des"><?php echo ($brand_info["desc_cn"]); ?></div>
    	   </div>
			   <div class="brand-top-logo-right">
				 <!--<img src="<?php echo ($goods_info[0]['goods_img']['m'][0]); ?>">-->
			   </div>
	    </div>
    	<div class="w w1390">
            <div class="selector">
				<div class="right-extra" rewrite=0>
				    <div class="u_cloose">
				        <dl>
				            <dt>已选条件：</dt>
				            <dd>
								<?php if($brand_info): ?><div class="get_item" title="<?php echo ($brand_info["brand_name"]); ?>">
										<b>品牌：</b>
										<em><?php echo ($brand_info["brand_name"]); ?></em>
										<a href="/Mall/category/index/id/0"></a>
									</div><?php endif; ?>
								<?php if($price_max): ?><div class="get_item" >
										<b>价格：</b>
										<em><?php echo I('price_min');?>-<?php echo I('price_max');?></em>
										<a href="/mall/brand/detail/id/<?php echo ($id); ?>"></a>
									</div><?php endif; ?>
                            </dd>
							<dd class="give_up_all">
								<a href="/Mall/category/index/id/0" class="ftx-05">全部撤销</a>
							</dd>
        				</dl>
				    </div>
					<div class="goods_list">
						<ul class="attr_father">
                        	<li class="s-line">
				                <div class="s-l-wrap brand_img attr_list">
				                    <div class="s-l-tit brand_name_l">品牌：</div>
				                    <div class="s-l-value brand_select_more">
				                        <div class="all_a_z">
				                            <ul class="a_z">
				                                <li class="all_brand curr">所有品牌</li>
                                                <li data-key="A">A</li>
                                                <li data-key="B">B</li>
                                                <li data-key="C">C</li>
                                                <li data-key="D">D</li>
                                                <li data-key="E">E</li>
                                                <li data-key="F">F</li>
                                                <li data-key="G">G</li>
                                                <li data-key="H">H</li>
                                                <li data-key="I">I</li>
                                                <li data-key="J">J</li>
                                                <li data-key="K">K</li>
                                                <li data-key="L">L</li>
                                                <li data-key="M">M</li>
                                                <li data-key="N">N</li>
                                                <li data-key="O">O</li>
                                                <li data-key="P">P</li>
                                                <li data-key="Q">Q</li>
                                                <li data-key="R">R</li>
                                                <li data-key="S">S</li>
                                                <li data-key="T">T</li>
                                                <li data-key="U">U</li>
                                                <li data-key="V">V</li>
                                                <li data-key="W">W</li>
                                                <li data-key="X">X</li>
                                                <li data-key="Y">Y</li>
                                                <li data-key="Z">Z</li>
                                                <li class="other_brand">其他</li>
                            				</ul>
				                        </div>
				                        <div class="wrap_brand">
				                            <div class="brand_div">
												<?php if(is_array($brand_list)): foreach($brand_list as $key=>$brand): ?><div class="brand_img_word" brand ="Y">
                                                    <a href="/Mall/brand/detail/id/<?php echo ($brand["brand_id"]); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>">
			                                        	<img src="<?php echo ($brand["logo"]); ?>" alt="<?php echo ($brand["brand_name"]); ?>" title="<?php echo ($brand["brand_name"]); ?>">
			                                        	<span><?php echo ($brand["brand_name"]); ?></span>
			                                        </a>
                                                </div><?php endforeach; endif; ?>
                                        	</div>
                        				</div>
				                        <div class="zimu_list">
				                            <ul class="get_more">
												<?php if(is_array($brand_list)): foreach($brand_list as $key=>$brand): ?><li class="is_no" brand ="Y" url_id="<?php echo ($brand["brand_id"]); ?>"><span class="choose_ico"></span><a class="goods_brand_name" data-url="/Mall/brand/detail/id/<?php echo ($id); ?>/brand_id/<?php echo ($brand["brand_id"]); ?>"><?php echo ($brand["brand_name"]); ?></a></li><?php endforeach; endif; ?>
                                            </ul>
				                        </div>
				                        <div class="enter_yes_no">
				                            <div class="ct_auto">
				                                <span class="yes_bt botton disabled">确定</span>
				                                <span class="no_bt botton">关闭</span>
				                            </div>
				                        </div>
				                    </div>
				                    <div class="s-l-opt sl-ext">
				                        <div class="choose_open s-l-more"><i class="iconfont icon-down"></i></div>
				                        <!--<div class="choose_more s-l-multiple"><i class="iconfont icon-plus"></i>多选</div>-->
				                    </div>
				                </div>
				            </li>


                        	<li class="s-line">
				                <dl class="s-l-wrap">
				                    <div class="s-l-tit filter_attr_name">价格：</div>
				                    <div class="s-l-value attr_son">
				                        <div class="price_auto fl">
											<div class="price_range"><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/0/price_max/100/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>">0&nbsp;-&nbsp;100</a></div>
											<div class="price_range"><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/100/price_max/300/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>">100&nbsp;-&nbsp;300</a></div>
											<div class="price_range"><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/300/price_max/500/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>">300&nbsp;-&nbsp;500</a></div>
											<div class="price_range"><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/500/price_max/1000/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>">500&nbsp;-&nbsp;1000</a></div>
											<div class="price_range"><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/1000/price_max/10000/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>">1000&nbsp;-&nbsp;10000</a></div>
				                        </div>
				                        <div class="price_auto price_bottom fl">
				                            <input type="text" title="最低价" name="price_min" class="price_class price_min" value="<?php echo ((isset($price_min) && ($price_min !== ""))?($price_min):0); ?>">
				                            <span class="price_class span_price_class">-</span>
				                            <input type="text" title="最高价" name="price_max" class="price_class price_max" value="<?php echo ($price_max); ?>">
				                            <button class="price_ok price_class">确定</button>
				                        </div>
				                    </div>
				                </dl>
				            </li>
            			</ul>
    				</div>
					<div class="click_more s-more"><span class="sm-wrap"><strong>更多选项</strong><i class="iconfont icon-down"></i></span></div>
				</div>
            </div>
            <div class="filter">
        		<div class="filter-wrap">
				    <div class="filter-sort">
                        <?php if($sort == 'id' && $order == 'DESC'): ?><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/brand_id/order/ASC#goods_list" class="curr">综合<i class="iconfont icon-arrow-down"></i></a>
                        <?php else: ?>
                            <a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/brand_id/order/DESC#goods_list" class="">综合<i class="iconfont icon-arrow-up"></i></a><?php endif; ?>
				        <!--<a href="/mall/category/index/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/sales_volume/order/DESC#goods_list" class="">销量<i class="iconfont icon-arrow-up"></i></a>-->
                        <?php if($sort == 'update_time' && $order == 'DESC'): ?><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/update_time/order/ASC#goods_list" class="curr">新品<i class="iconfont icon-arrow-down"></i></a>
                        <?php else: ?>
                            <a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/update_time/order/DESC#goods_list" class="">新品<i class="iconfont icon-arrow-up"></i></a><?php endif; ?>
                        <?php if($sort == 'price' && $order == 'DESC'): ?><a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/price/order/ASC#goods_list" class="curr">价格<i class="iconfont icon-arrow-down"></i></a>
                        <?php else: ?>
                            <a href="/mall/brand/detail/id/<?php echo ($id); ?>/price_min/<?php echo ($price_min); ?>/price_max/<?php echo ($price_max); ?>/p/<?php echo ($p); ?>/sort/price/order/DESC#goods_list" class="">价格<i class="iconfont icon-arrow-up"></i></a><?php endif; ?>
				    </div>
				    <div class="filter-range">
				        <div class="fprice">
				        	<form method="GET" action="/mall/brand/detail/id/<?php echo ($id); ?>/p/<?php echo ($p); ?>/sort/<?php echo ($sort); ?>/order/<?php echo ($order); ?>" class="sort" name="listform">
                                <div class="fP-box">
				                    <input type="text" name="price_min" class="f-text price-min" autocomplete="off" maxlength="6" placeholder="￥" id="price-min" value="<?php echo ((isset($price_min) && ($price_min !== ""))?($price_min):0); ?>">
				                    <span>&nbsp;~&nbsp;</span>
				                    <input type="text" name="price_max" class="f-text price-max" autocomplete="off" maxlength="6" placeholder="￥" id="price-max" value="<?php echo ($price_max); ?>">
				                </div>
				                <div class="fP-expand">
				                	<a class="ui-btn-s ui-btn-clear" href="javascript:void(0);" id="clear_price">清空</a>
									<a href="javascript:void(0);" class="ui-btn-s ui-btn-s-primary ui-btn-submit">确定</a>
				                </div>
				            </form>
				        </div>
				        <div class="fcheckbox">
				                <div class="checkbox_items">
				                <div class="checkbox_item ">
				                    <input type="checkbox" name="fk-type" class="ui-checkbox" value="" id="store-checkbox-013" >
				                    <label class="ui-label" for="store-checkbox-013">仅显示有货</label>
				                    <i id="input-i1" rev=""></i>
				                    <i id="input-i2" rev=""></i>
				                </div>
				            </div>
				        </div>
				    </div>
    				<div class="filter-right">
		                <div class="button-page">
				            <span class="pageState"><span>1</span>/1</span>
				            <a href="javascript:void(0);" title="上一页"><i class="iconfont icon-left"></i></a>
				            <a href="javascript:void(0);" title="下一页"><i class="iconfont icon-right"></i></a>
				        </div>
				        <div class="styles">
				            <ul class="items" ectype="fsortTab">
				                <li class="item" data-type="large"><a href="javascript:void(0)" title="大图模式"><span class="iconfont icon-switch-grid"></span>大图</a></li>
				                <li class="item" data-type="samll"><a href="javascript:void(0)" title="小图模式"><span class="iconfont icon-switch-list"></span>小图</a></li>
				            </ul>
				        </div>
            		</div>
				</div>
            </div>
			<div class="g-view w">
			    <div class="goods-list w1390" ectype="gMain">
					<?php if(!empty($goods_info)): ?><div class="gl-warp gl-warp-large">
        	            <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        	<ul>
								<?php if(is_array($goods_info)): foreach($goods_info as $key=>$vo): ?><li class="gl-item">
				                    <div class="gl-i-wrap">
				                        <div class="p-img">
											<a href="<?php echo U('goods/index?id='.$vo['goods_id']);?>" target="_blank">
												<?php if(!$vo['goods_img']['m'][0]): ?><img src="/Public/Mall/images/default_goodsimg.png" />
												<?php else: ?>
													<img src="<?php echo ($vo['goods_img']['m'][0]); ?>" /><?php endif; ?>
											</a>
										</div>
                                        <div class="sider" style="height: 30px;">
                                        	<?php if(!empty($vo["goods_img"]["f"])): ?><ul>												
													<?php if(is_array($vo["goods_img"]["f"])): foreach($vo["goods_img"]["f"] as $key=>$v): ?><li>
															<img src="<?php echo ($v); ?>" width="26" height="26" />
														</li><?php endforeach; endif; ?>												
	                                           </ul><?php endif; ?>
					                    </div>
                                        <div class="p-lie">
                            				<div class="p-price">
                                                <em>¥</em><?php echo ($vo["price"]); ?>
											</div>
                            				<div class="p-num">已售<em>10</em>件</div>
                        				</div>
				                        <div class="p-name"><a href="<?php echo U('goods/index?id='.$vo['goods_id']);?>" title="<?php echo ($vo["goods_name"]); ?>" target="_blank"><?php echo ($vo["goods_name"]); ?></a></div>
				                        <div class="p-store">
				                            <a href="" title="<?php echo ($vo["store_name"]); ?>" class="store" target="_blank"><?php echo ($vo["store_name"]); ?></a>
                        				</div>
                                        <div class="p-activity">
											<?php if($vo['is_new'] == 1): ?><span class="tag tac-mn">
													<i class="i-left"></i>
													新品
													<i class="i-right"></i>
												</span><?php endif; ?>
											<?php if($vo['is_hot'] == 1): ?><span class="tag tac-mh">
													<i class="i-left"></i>
														热卖
													<i class="i-right"></i>
												</span><?php endif; ?>
											<?php if($vo['is_boutique'] == 1): ?><span class="tag tac-mb">
													<i class="i-left"></i>
														精品
													<i class="i-right"></i>
												</span><?php endif; ?>
											<?php if($vo['is_cross'] == 1): ?><span class="tag tac-sr">
													<i class="i-left"></i>
														 跨境
													<i class="i-right"></i>
												</span><?php endif; ?>
                                        </div>
                                        <div class="p-operate goods-list-add">
				                            <!--<a href="javascript:void(0);" id="compareLink">
				                                <input id="<?php echo ($vo["goods_id"]); ?>" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, '<?php echo ($vo["goods_id"]); ?>','<?php echo ($vo["goods_name"]); ?>','0', '<?php echo ($vo[goods_img][m][0]); ?>', '<em>¥</em><?php echo ($vo["price"]); ?>', '<em>¥</em><?php echo ($vo["market_price"]); ?>')">
				                                <label class="ui-label" for="<?php echo ($vo["goods_id"]); ?>">对比</label>
				                            </a>
                            				<a href="javascript:collect('<?php echo ($vo["goods_id"]); ?>');" class="choose-btn-coll"><i class="iconfont icon-zan-alt"></i>收藏</a>-->
                                            <a href="javascript:void(0);" onClick="javascript:addToCart('<?php echo ($vo["goods_id"]); ?>',0,event,this,'flyItem');" rev="images/201703/thumb_img/0_thumb_G_1490209163537.jpg" data-dialog="addCart_dialog" data-divid="addCartLog" data-title="请选择属性" class="addcart">
                                    			<i class="iconfont icon-carts"></i>加入购物车                                
                                            </a>
                                        </div>                        
                                    </div>
                				</li><?php endforeach; endif; ?>
            				</ul>
                        </form>
                        <div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>
			        </div>
			        <div class="gl-warp gl-warp-samll">
        	            <form name="compareForm_cat" id="compareForm_cat" action="compare.php" method="post" onSubmit="return compareGoods(this);" class="goodslistForm" data-state="0">
                        	<ul>
                        		<?php if(is_array($goods_info)): foreach($goods_info as $key=>$vo): ?><li class="gl-h-item ">
				                    <div class="gl-i-wrap">
				                        <div class="col col-1">
				                            <div class="p-img">
				                            	<a href="<?php echo U('goods/index?id='.$vo['goods_id']);?>" target="_blank">
				                            		<?php if($vo[goods_img][m][0]): ?><img src="<?php echo ($vo[goods_img][m][0]); ?>">
				                            			<?php else: ?>
				                            			<img src="/Public/Mall/images/default_goodsimg.png" /><?php endif; ?>
				                            	</a>
				                            </div>
				                            <div class="p-right">
				                                <div class="p-name"><a href="<?php echo U('goods/index?id='.$vo['goods_id']);?>" title="<?php echo ($vo["goods_name"]); ?>" target="_blank"><?php echo ($vo["goods_name"]); ?></a></div>
				                                <div class="p-lie">
				                                    <div class="p-num">销量：10</div>
				                                   <!-- <div class="p-comm">评价：10</div>-->
				                                </div>
				                            </div>
				                        </div>
				                        <div class="col col-2">
				                            <div class="p-store">
				                                <a href="" title="<?php echo ($vo["store_name"]); ?>" target="_blank"><?php echo ($vo["store_name"]); ?></a>
				                                <a href="javascript:;" id="IM" onclick="openWin(this)" ru_id="0" class="p-kefu"><i class="iconfont icon-kefu"></i></a>				                                                        
				                            </div>
				                        </div>
				                        <div class="col col-3">
				                            <div class="p-price">
				                                <div class="shop-price">
                                                    <em>¥</em><?php echo ($vo["price"]); ?>                                                                    
				                                </div>
				                                <div class="original-price"><em>¥</em><?php echo ($vo["market_price"]); ?></div>
				                            </div>
				                        </div>
				                        <div class="col col-4">
				                            <div class="p-operate">
				                                <!--<a href="javascript:void(0);" id="compareLink">
					                                <input id="duibi_<?php echo ($vo["goods_id"]); ?>" type="checkbox" name="duibi" class="ui-checkbox" onClick="Compare.add(this, '<?php echo ($vo["goods_id"]); ?>','<?php echo ($vo["goods_name"]); ?>','0', '<?php echo ($vo[goods_img][m][0]); ?>', '<em>¥</em><?php echo ($vo["price"]); ?>', '<em>¥</em><?php echo ($vo["market_price"]); ?>')">
					                                <label class="ui-label" for="duibi_<?php echo ($vo["goods_id"]); ?>">对比</label>
				                            	</a>
				                            	<a href="javascript:collect('<?php echo ($vo["goods_id"]); ?>');" class="choose-btn-coll">
				                            		<i class="iconfont icon-zan-alt"></i>收藏
				                            	</a>-->
				                            	<a href="javascript:void(0);" onClick="javascript:addToCart('<?php echo ($vo["goods_id"]); ?>',0,event,this,'flyItem2');" rev="<?php echo ($vo[goods_img][m][0]); ?>" data-dialog="addCart_dialog" data-id="" data-divid="addCartLog" data-url="" data-title="请选择属性" class="addcart">
				                                    <i class="iconfont icon-carts"></i>加入购物车                                
				                            	</a>				                                                                                        
				                            </div>
				                        </div>
				                    </div>
                				</li><?php endforeach; endif; ?>                                                               
            				</ul>
                        </form>
                        <div id="flyItem2" class="fly_item2"><img src="" width="40" height="40"></div>
			        </div>
						<?php else: ?>
						<div class="no_records">
							<i class="no_icon_two"></i>
							<div class="no_info no_info_line">
								<h3>抱歉，没有找到符合条件的数据</h3>
								<div class="no_btn">
									<a href="/Mall/index" class="btn sc-redBg-btn">返回首页</a>
								</div>
							</div>
						</div><?php endif; ?>
					<input type="hidden" value="2" id="region_id" name="region_id">
					<input type="hidden" value="19" id="area_id" name="area_id">
			        <div class="clear"></div>
    			</div>    
			</div>
			<div class="pages-inner">
				<?php echo ($_page); ?>
			</div>
        </div>
    </div>
    
    
 
 
 <div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>
    


	<!-- /主体 -->

	<!-- 底部 -->
	
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
    
    
    	
    
    
    
    
<div class="footer">
    <div class="dsc-service">
        <div <?php if($is_shopindex): ?>class="w w1200 relative"<?php else: ?>class="w w1200 relative"<?php endif; ?>>
            <ul class="service-list">
                <li>
                    <div class="service-tit service-zheng"><i class="iconfont icon-zheng"></i></div>
                    <div class="service-txt">正品保障</div>
                </li>
                <li>
                    <div class="service-tit service-qi"><i class="iconfont icon-qi"></i></div>
                    <div class="service-txt">七天包退</div>
                </li>
                <li>
                    <div class="service-tit service-hao"><i class="iconfont icon-grin"></i></div>
                    <div class="service-txt">好评如潮</div>
                </li>
                <li>
                    <div class="service-tit service-shan"><i class="iconfont icon-light"></i></div>
                    <div class="service-txt">闪电发货</div>
                </li>
                <li class="last">
                    <div class="service-tit service-quan"><i class="iconfont icon-trophy"></i></div>
                    <div class="service-txt">权威荣誉</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="dsc-help">
        <div <?php if($is_shopindex): ?>class="w w1200"<?php else: ?>class="w w1390"<?php endif; ?>>
            <div class="help-list">
                 <div class="help-item">
                    <h3>新手上路 </h3>
                    <ul>
                        <li><a href="article.php?id=9"  title="售后流程" target="_blank">售后流程</a></li>
                        <li><a href="article.php?id=10"  title="购物流程" target="_blank">购物流程</a></li>
                        <li><a href="article.php?id=11"  title="订购方式" target="_blank">订购方式</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>配送与支付 </h3>
                    <ul>
	                    <li><a href="article.php?id=15"  title="货到付款区域" target="_blank">货到付款区域</a></li>
                        <li><a href="article.php?id=16"  title="配送支付智能查询 " target="_blank">配送支付智能查询</a></li>
                        <li><a href="article.php?id=17"  title="支付方式说明" target="_blank">支付方式说明</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>会员中心</h3>
                    <ul>
                        <li><a href="article.php?id=18"  title="资金管理" target="_blank">资金管理</a></li>
                        <li><a href="article.php?id=19"  title="我的收藏" target="_blank">我的收藏</a></li>
                        <li><a href="article.php?id=20"  title="我的订单" target="_blank">我的订单</a></li>
	                </ul>
                </div>
                <div class="help-item">
                    <h3>服务保证 </h3>
                    <ul>
                        <li><a href="article.php?id=21"  title="退换货原则" target="_blank">退换货原则</a></li>
                        <li><a href="article.php?id=22"  title="售后服务保证" target="_blank">售后服务保证</a></li>
                        <li><a href="article.php?id=23"  title="产品质量保证 " target="_blank">产品质量保证</a></li>
                    </ul>
                </div>
                <div class="help-item">
                    <h3>联系我们 </h3>
                    <ul>
                        <li><a href="article.php?id=24"  title="网站故障报告" target="_blank">网站故障报告</a></li>
                        <li><a href="article.php?id=25"  title="选机咨询 " target="_blank">选机咨询</a></li>
                        <li><a href="article.php?id=26"  title="投诉与建议 " target="_blank">投诉与建议</a></li>
                    </ul>
                </div>                                  
            </div>
            <div class="help-cover">
                <div class="help-ctn">
                    <div class="help-ctn-mt">
                        <span>服务热线</span>
                        <strong>4000-000-000</strong>
                    </div>
                    <div class="help-ctn-mb">                        
                        <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;" class="btn-ctn"><i class="iconfont icon-csu"></i>咨询客服</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dsc-copyright">
        <div <?php if($is_shopindex): ?>class="w w1200"<?php else: ?>class="w w1200"<?php endif; ?>>
            <p class="copyright_links">
                <a href="/mall/index" >首页</a>|
                <a href="#" >隐私保护</a>|
                <a href="#" >联系我们</a>|
                <a href=#" >免责条款</a>|
                <a href="#" >公司简介</a>|
                <a href="#"  target="_blank" >商家入驻</a>|
                <a href="#" >意见反馈</a>
            </p>
            <p class="copyright_info">
                <a href="/mall/index" target="_blank" title="电商学院">易恒云</a>
            </p>                         
            <b>ICP备案证书号:<a href="http://www.miibeian.gov.cn/" target="_blank">DSC00000123</a> 
            	<a href="/mall/index" target="_blank">POWERED BY 易恒云</a>
            </b>                        
        </div>
    </div>
    
    
    <div class="hide" id="pd_coupons">
        <span class="success-icon m-icon"></span>
        <div class="item-fore">
            <h3>领取成功！感谢您的参与，祝您购物愉快~</h3>
            <div class="txt ftx-03">本活动为概率性事件，不能保证所有客户成功领取优惠券</div>
        </div>
    </div>
    
    
    <div class="hidden">
        <input type="hidden" name="seller_kf_IM" value="" rev="" ru_id="" />
        <input type="hidden" name="seller_kf_qq" value="349488953" />
        <input type="hidden" name="seller_kf_tel" value="4000-000-000" />
        <input type="hidden" name="user_id" value="0" />
    </div>
</div>

<div class="mui-mbar-tabs">
	<div class="quick_link_mian" data-userid="0">
        <div class="quick_links_panel">
            <div id="quick_links" class="quick_links">
            	<ul>
                    <!--<li>
                        <a href="user.php"><i class="setting"></i></a>
                        <div class="ibar_login_box status_login">
                            <div class="avatar_box">
                                <p class="avatar_imgbox">
                                    <img src="images/touxiang.jpg" width="100" height="100"/>
                                </p>
                                <ul class="user_info">
                                    <li>用户名：暂无</li>
                                    <li>级&nbsp;别：暂无</li>
                                </ul>
                            </div>
                            <div class="login_btnbox">
                                <a href="user.php?act=order_list" class="login_order">我的订单</a>
                                <a href="user.php?act=collection_list" class="login_favorite">我的收藏</a>
                            </div>
                            <i class="icon_arrow_white"></i>
                        </div>
                    </li>-->
                    
                    <li id="shopCart">
                        <a href="javascript:void(0);" class="cart_list">
                            <i class="message"></i>
                            <div class="span">购物车</div>
                            <span class="cart_num">0</span>
                        </a>
                    </li>
                    <!--<li>
                        <a href="javascript:void(0);" class="mpbtn_order"><i class="chongzhi"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">我的订单</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_yhq"><i class="yhq"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_money" style="font-size:12px; cursor:pointer;">优惠券</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_total"><i class="view"></i></a>
                        <div class="mp_tooltip" style=" visibility:hidden;">
                            <font id="mpbtn_myMoney" style="font-size:12px; cursor:pointer;">我的资产</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_history"><i class="zuji"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_histroy" style="font-size:12px; cursor:pointer;">我的足迹</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_collection"><i class="wdsc"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_wdsc" style="font-size:12px; cursor:pointer;">我的收藏</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="mpbtn_email"><i class="email"></i></a>
                        <div class="mp_tooltip">
                            <font id="mpbtn_email" style="font-size:12px; cursor:pointer;">邮箱订阅</font>
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </li>-->
                </ul>
            </div>
            <div class="quick_toggle">
            	<ul>
                    <!--<li>                      
                        <a id="IM" IM_type="dsc" onclick="openWin(this)" href="javascript:;"><i class="kfzx"></i></a>
                        <div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>                        
                    </li>-->
                    <li class="returnTop">
                        <a href="javascript:void(0);" class="return_top"><i class="top"></i></a>
                    </li>
               </ul>
            </div>
        </div>
        <div id="quick_links_pop" class="quick_links_pop"></div>
    </div>
</div>
<div class="email_sub">
	<div class="attached_bg"></div>
	<div <?php if($is_shopindex): ?>class="w1390"<?php else: ?>>class="w1200"<?php endif; ?>>
        <div class="email_sub_btn">
            <input type="input" id="user_email" name="user_email" autocomplete="off" placeholder="请输入您的邮箱帐号">
            <a href="javascript:void(0);" onClick="add_email_list();" class="emp_btn">订阅</a>
        </div>
    </div>
</div>


 <div class="hide">
    
    <div id="dialog_remove" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">删除商品？</h3>
                <div class="ftx-03">您可以选择移到收藏，或删除商品。</div>
            </div>
        </div>
    </div>
    
    <div id="dialog_collect" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">移到收藏</h3>
                <div class="ftx-03">移动后选中商品将不在购物车中显示。</div>
            </div>
        </div>
    </div>
    
    <div id="flow_add_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">请至少选中一件商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_gift_goods" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04 rem">最多领取<em ectype="giftNumber"></em>个商品</h3>
            </div>
        </div>
    </div>
    
    
    
    
    <div id="set_default" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您确定要设置为默认收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="del_address" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">你确认要删除该收货地址吗？</h3>
            </div>
        </div>
    </div>
    
    <div id="no_address_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
        </div>
    </div>
    
    <div id="no_goods_cart" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您的购物车中没有商品！</h3>
            </div>
        </div>
    </div>
    
    <div id="cart_address_not" class="hide">
        <div class="tip-box icon-box">
            <span class="warn-icon m-icon"></span>
            <div class="item-fore">
                <h3 class="ftx-04">您还没有选择收货地址！</h3>
            </div>
        </div>
    </div>
	
   
</div>







<script type="text/javascript">
	function getCarNum(){
		Ajax.call('/Mall/Cart/cartInfo','', function(res){
			$(".cart_num").text(res.num);
		}, 'POST', 'JSON');
	}
	getCarNum();
	

	function deleteCartGoods(goods_id,index)
{
	Ajax.call('/Mall/Cart/deleteCartGoods', 'goods_id='+goods_id+'&index_val='+index, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
	
  if (res.error==0)
  {
     	
    	Ajax.call('/Mall/Cart/cartInfo', 'block=header', function(res){
    		$("#ECS_CARTINFO").html(res);      	
    	}, 'POST', 'html');
    	
    	Ajax.call('/Mall/Cart/cartInfo', 'block=right', function(res){
    		$(".pop_panel").html(res);
    		tbplHeigth();
    	}, 'POST', 'html');
    	getCarNum();
    	
    	if(res.index_val==2){
    		location.reload();
    	}
   
  }else{
  	get_goods_prompt_message(res.message);
  }

}

//获取用户Id
setInterval(function(){
    Ajax.call('/Mall/Home/getUid', '',function(data){
        $("#site-nav").attr("data-userid",data);
    } ,'POST', 'JSON');
},180000);



</script>


	<!-- /底部 -->
</body>
</html>