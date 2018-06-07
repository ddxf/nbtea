<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<title>茶叶商城首页</title>
</head>

<body>
<!--顶部样式-->
<div id="top">
  <div class="top">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="#" class="red">[请登录]</a> 新用户<a href="#" class="red">[免费注册]</a></li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">我的订单</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="#">购物车(<b>0</b>)</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>
	   <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>
	    <div class="hd_menu_list">
		   <ul>
		    <li><a href="#">常见问题</a></li>
			<li><a href="#">在线退换货</a></li>
		    <li><a href="#">在线投诉</a></li>
			<li><a href="#">配送范围</a></li>
		   </ul>
		</div>	   
	   </li>
	  </ul>
	</div>
  </div>
</div>
<!--logo和搜索样式-->
<div id="header"  class="header">
  <div class="logo">
  <a href="#"><img src="images/logo.png" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3404-000</span>
  </div>
  </div>
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
</div>
</div>
<!--菜单栏样式-->
<!--导航栏样式-->
<div id="Menu" class="clearfix">
  <div class="Menu_style">
  <div id="allSortOuterbox">
    <div class="Category"><a href="#" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
	 <!--左侧栏目开始-->
	 <div class="Menu_list">	
	    <div class="menu_title">茶叶品种</div>
        <a href="Product_List.html">贡茗茶</a>
        <a href="Product_List.html">冠茗茶</a>
        <a href="Product_List.html">佳茗茶</a>
        <a href="Product_List.html">珍茗茶</a>
        <a href="Product_List.html">绿茶</a>
        <a href="Product_List.html">毛尖茶</a>
	</div>	
    <div class="Menu_list">	
	    <div class="menu_title">茶叶价格</div>
        <a href="#">100以下</a><a href="#">100-200</a><a href="#">200-400</a><a href="#">400-600</a><a href="#">600-900</a><a href="#">1000以上</a>
	</div>	
     <div class="Menu_list">	
	    <div class="menu_title">推荐茶叶</div>
        <ul class="recommend">
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
         <li><a href="#" title="[2015年新茶]巴山雀舌毛尖茶新茶，含硒">[2015年新茶]巴山雀舌...</a></li>
        </ul>
	</div>	
	</div>		
	</div>
	<!--菜单栏-->
	<div class="Navigation" id="Navigation">
		 <ul class="Navigation_name">
			<li><a class="nav_on" id="mynav1"  href="index.html"><span>首页</span></a></li>
			<li><a class="nav_on" id="mynav2"  href="Product_List.html"><span>巴山雀舌</span></a></li>
			<li><a class="nav_on" id="mynav3"  href="#"><span>贡茗</span></a></li>
			<li><a class="nav_on" id="mynav4"  href="#"><span>冠茗</span></a></li>
			<li><a class="nav_on" id="mynav5"  href="#"><span>臧芝堂</span></a></li>
			<li><a class="nav_on" id="mynav6"  href="#"><span>大巴山茶</span></a></li>
			<li><a class="nav_on" id="mynav7"  href="#"><span>达州（茶）</span></a></li>
			<li><a class="nav_on" id="mynav8"  href="Group_buy.htm"><span>今日团购</span></a></li>
			<li><a class="nav_on" id="mynav8"  href="#"><span>联系我们</span></a></li>
		 </ul>			 
		</div>
	<script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>
    <!--购物车-->	
    
     <div class="hd_Shopping_list" id="Shopping_list">
   <div class="s_cart"><em></em><a href="shopping_cart.html">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
   <div class="dorpdown-layer">
    <div class="spacer"></div>
	 <!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
	 <ul class="p_s_list">	   
		<li>
		    <div class="img"><img src="images/tianma.png"></div>
		    <div class="content"><p><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
			<div class="Operations">
			<p class="Price">￥55.00</p>
			<p><a href="#">删除</a></p></div>
		  </li>
		</ul>		
	 <div class="Shopping_style">
	 <div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
	  <a href="shopping_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
	 </div>	 
   </div>	
  </div>
</div>
<!--幻灯片样式-->
<div class="Plates"  id="mian">
<div class="bottom_style clearfix">
    <div class="image_display">
	<!--幻灯片样式-->
	  <div class="slider">
	   <div id="slideBox" class="slideBox">
			<div class="hd">
				<ul></ul>
			</div>
			<div class="bd">
				<ul>
					<li><a href="#" target="_blank"><img src="images/ad-1.png" /></a></li>
			        <li><a href="#" target="_blank"><img src="images/ad-3.jpg" /></a></li>
				</ul>
			</div>
			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a>
		</div>
		<script type="text/javascript">
		jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:9000});
		</script>
	  </div>     
      </div>
      </div>
      <!--内容样式-->
        <div class="Selling_list">        
         <div id="slideBox_list" class="slideBox_list">
           <div class="hd">
				<span class="arrow"><a class="next"></a><a class="prev"></a></span>
				<ul><li><a href="#">热销产品</a></li><li><a href="#">新品推荐</a></li><li><a href="#">限时促销</a></li></ul>
			</div>
			<div class="bd">
			 <ul>
             <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="Product_Detailed.html"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				 </li>
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="Product_Detailed.html"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>
					<li class="s_Products">
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>	
                       </li>	
                       	
             </ul>
             <ul>
             <li class="s_Products">
             <em class="icon_new"></em>
              <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
              </div>
				 </li>
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>
					<li class="s_Products">
                    <em class="icon_new"></em>
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>
					</li>	
					<li class="s_Products">
                    <em class="icon_new"></em>
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="p_comment">已有<a href="#">2345</a>人评论</div>
                       </div>	
                       </li>	
             </ul>
               <ul>
             <li class="s_Products">
              <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015年新茶】巴山雀舌60克毛尖马克罐（绿）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                      <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
              </div>
				 </li>
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°五岭洞藏黑金刚1500ml(双瓶装)</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                        <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					  <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>
					<li class="s_Products">
                      <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">桐木关正山小种 特级XZ1390-250g 天地盖硬盒 本朴</a></div>
					 <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                       <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>
					</li>	
					<li class="s_Products">
                     <div class="Products_list_name">
					   <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
                       </div>
                     <div class="time">剩余时间：<i>5</i>时<i>30</i>分<i>34</i>秒</div>
                       </div>	
                       </li>	
             </ul>
            </div>
         </div>
         <script type="text/javascript">jQuery(".slideBox_list").slide();</script>
       </div>
       <!--产品系列样式表-->
       <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>巴山雀舌系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-04.jpg" /></a>
            <a href="#"><img src="images/AD-03.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="Product_Detailed.html"><img src="Products/11.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="Product_Detailed.html"><img src="Products/10.jpg" /></a></div>
					   <div class="title_name"><a href="Product_Detailed.html">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/12.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/3.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
       <!--产品版块-->
        <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>巴山雀舌系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-02.jpg" /></a>
            <a href="#"><img src="images/AD-01.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/1.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/4.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/5.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/6.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015新茶上市】桐木关金骏眉（小菜芽）JM3300-60g 小抽屉盒 雅朴</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/7.jpg" /></a></div>
					   <div class="title_name"><a href="#">【2015新茶上市】桐木关金骏眉（小菜芽）JM3300-60g 小抽屉盒 雅朴</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/9.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/8.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
        <!--产品版块-->
        <div class="Area"> 
         <div class="Area_title">
         <div class="name"><em class="icon_title"></em>茶具系列</div>
         <div class="right">
         <span class="p_link"><a href="#">贡茶</a><a href="#">毛尖茶</a><a href="#">佳茗茶</a><a href="#">贡茶</a></span>
         <span class="more"><a href="#">更多《</a></span>
         </div>
         </div>
         <div class="Area_list clearfix">
          <div class="Area_ad">
            <a href="#"><img src="images/AD-05.jpg" /></a>
            <a href="#"><img src="images/AD-06.jpg" /></a>
          </div>
          <div class="Area_p_list">
          <ul>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/18.jpg" /></a></div>
					   <div class="title_name"><a href="#">雅集整套花茶壶茶杯保温套装耐热玻璃泡茶壶花草茶茶具带品茶杯</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/13.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/14.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
            <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/15.jpg" /></a></div>
					   <div class="title_name"><a href="#">闽毓 茶具 整套实木茶盘套装电磁炉套装 冰裂功夫茶具套装四合一</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/16.jpg" /></a></div>
					   <div class="title_name"><a href="#">宏中 宜兴紫砂茶叶罐 七饼普洱醒茶罐手工茶罐茶缸桶大号精品</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/17.jpg" /></a></div>
					   <div class="title_name"><a href="#">踞虎堂正品铁壶朱雀铜雀铜盖日本南部铸铁壶生铁壶茶具茶壶</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/19.jpg" /></a></div>
					   <div class="title_name"><a href="#">东茶西壶 雪花茶具陶瓷茶壶茶杯整套功</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
           <li class="s_Products">
            <div class="Area_product_c">
              <div class="img center"><a href="#"><img src="Products/20.jpg" /></a></div>
					   <div class="title_name"><a href="#">52°泸州老窖封藏老酒（窖藏）</a></div>
					   <div class="s_Price clearfix">
                       <span class="Current_price">商城价<em>￥39.00</em></span>
                       <span class="Original_Price">原价&nbsp;<em>76.00</em></span>
               </div>
            </div>
           </li>
          </ul>
          </div>
         </div>
       </div>
       <!--信息内容样式-->
       <div class="bs_info_area clearfix">
       <!--百科知识-->
        <div class="know_how left">
        <div class="title_name"><em class="title_icon"></em>茶叶百科  <a href="">更多》</a></div>
        <div class="info_content">
         <uL>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">大红袍属于什么茶</a></li>
          <li><em class="info_icon"></em><a href="#">普洱茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">绿茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">乌龙茶的功效与作用</a></li>
          <li><em class="info_icon"></em><a href="#">铁观音属于什么茶</a></li>
           <li><em class="info_icon"></em><a href="#">铁观音属于什么茶</a></li>
         </uL>
        </div>
        </div>
        <!--巴山雀舌信息-->
        <div class="info_about left">
         <div class="title_name"><em class="title_icon"></em>巴山介绍 <a href="#">查看详细》</a></div>
         <div class="info_content bs_about">
          <img src="images/logo_img_03.png" />
          巴山雀舌，品种：绿茶，产于四川省万源市，境内环境优美，土壤、气候特别适宜茶树生长，茶叶自然品质好，并天然富硒。巴山雀舌系采用其茶树的 高档原料精心制作而成，其品质特征外形扁平匀直，绿润带毫。经水冲泡叶底嫩绿明亮，香气鲜嫩持久，滋味醇爽回甘，汤色嫩绿明亮。<br />
           茶叶以富含硒而出名，抗氧化能力强，能清除水中污染毒素，故具有延缓衰老，防癌抗癌，抗高血压，防止色素堆积，增强机体活力，防辐射等作用。
    巴山雀舌”先后获得国家省部级以上奖项达60余次,产品曾先后获得“中国文化名茶”、“四川省十大名茶”、“四川省名牌产品”...
         </div>
        </div>
        <!--新闻中心-->
        <div class="mews right">
         <div class="title_name"><em class="title_icon"></em>文化底蕴<a href="#">更多》</a></div>
         <div class="info_content news">
          <ul>
          <li class="Headlines_news">
           <a href="#" class="news_img"><img src="images/news_img.jpg" /></a>
           <a href="#">1991年“七·五”星火科技成果巴山雀舌获金奖江总书记视...</a>
           <p class="news_Profile">星火科技成果巴山雀舌获金奖江总书记视察巴山雀舌展台</p>
          </li>
          <li><a href="#">006年11月巴山雀舌获“四川省十大名茶”</a></li>
          <li><a href="#">2007年十月中国食品协会授予万源市“中国富硒...</a></li>
          <li><a href="#">张爱萍将军为巴山雀舌提字</a></li>
          <li><a href="#">巴山雀舌茶历史可追溯到西周年代</a></li>
          </ul>        
         </div>
        </div>       
       </div>
       <!--友情链接-->
       <div class="Links">
        <div class="link_title">友情链接</div>
        <div class="link_address"><a href="#">四川茶叶协会</a>  <a href="#">链接地址</a>  <a href="#">链接地址</a>  <a href="#">链接地址 </a>   <a href="#">链接地址</a> <a href="#">链接地址</a> <a href="#">链接地址</a></div>
       </div>
</div>
<!--底部样式-->
<div class="footer">
 <div class="streak"></div>
 <div class="footerbox clearfix">
  <div class="left_footer">
   <div class="img"><img src="images/img_33.png" /></div>
   <div class="phone">
    <h2>服务咨询电话</h2>
    <p class="Numbers">400-0000-000</p>
   </div>
  </div>
  <div class="right_footer">
   <dl>
    <dt><em class="icon_img"></em>购物指南</dt>
    <dd><a href="#">怎样购物</a></dd>
    <dd><a href="#">积分政策</a></dd>
    <dd><a href="#">会员优惠</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">快递资费及送达时间</a></dd>
    <dd><a href="#">快递覆盖地区查询</a></dd>
    <dd><a href="#">验货与签收</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">货到付款</a></dd>
    <dd><a href="#">支付宝</a></dd>
    <dd><a href="#">财付通</a></dd>
    <dd><a href="#">网银支付</a></dd>
    <dd><a href="#">银联支付</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>售后服务</dt>
    <dd><a href="#">退换货原则</a></dd>
    <dd><a href="#">退换货要求与运费规则</a></dd>
    <dd><a href="#">退换货流程</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>关于我们</dt>
    <dd><a href="#">关于我们</a></dd>
    <dd><a href="#">友情链接</a></dd>
    <dd><a href="#">媒体报道</a></dd>
    <dd><a href="#">新闻动态</a></dd>
    <dd><a href="#">企业文化</a></dd>
 
   </dl>
  </div>
 </div>
 <div class="slogen">
  <div class="footerbox clearfix ">
  <ul class="wrap">
	 <li>
	  <a href="#"><img src="images/icon_img_02.png" data-bd-imgshare-binded="1"></a>
	  <b>正品保证</b>
	  <span>正品行货 放心选购</span>
	 </li>
	 <li><a href="#"><img src="images/icon_img_03.png" data-bd-imgshare-binded="2"></a>
	  <b>满68元包邮</b>
	  <span>购物满68元，免费快递</span>
	 </li>
	 <li>
	  <a href="#"><img src="images/icon_img_04.png" data-bd-imgshare-binded="3"></a>
	  <b>厂家直供</b>
	  <span>价格更低，质量更可靠</span>
	 </li>
      <li>
	  <a href="#"><img src="images/icon_img_05.png" data-bd-imgshare-binded="4"></a>
	  <b>权威认证</b>
	  <span>政府扶持单位，安全保证</span>
	 </li>
	</ul>
  </div>
 </div>
 <div class="footerbox Copyright">
  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>
  <p>川ICP备10200063号-1</p>
   <a href="#" class="return_img"></a>
 </div>
</div>
 <!--右侧菜单栏购物车样式-->
<div class="fixedBox">
  <ul class="fixedBoxList">
      <li class="fixeBoxLi user"><a href="#"> <span class="fixeBoxSpan"></span> <strong>用户</strong></a> </li>
    <li class="fixeBoxLi cart_bd" style="display:block;" id="cartboxs">
		<p class="good_cart">0</p>
			<span class="fixeBoxSpan"></span> <strong>购物车</strong>
			<div class="cartBox">
       		<div class="bjfff"></div><div class="message">购物车内暂无商品，赶紧选购吧</div>    </div></li>
    <li class="fixeBoxLi Service "> <span class="fixeBoxSpan"></span> <strong>客服</strong>
      <div class="ServiceBox">
        <div class="bjfffs"></div>
        <dl onclick="javascript:;">
		    <dt><img src="images/Service1.png"></dt>
		       <dd><strong>QQ客服1</strong>
		          <p class="p1">9:00-22:00</p>
		           <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
				<dl onclick="javascript:;">
		          <dt><img src="images/Service1.png"></dt>
		          <dd> <strong>QQ客服1</strong>
		            <p class="p1">9:00-22:00</p>
		            <p class="p2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=123456&amp;site=DGG三端同步&amp;menu=yes">点击交谈</a></p>
		          </dd>
		        </dl>
	          </div>
     </li>
	 <li class="fixeBoxLi code cart_bd " style="display:block;" id="cartboxs">
			<span class="fixeBoxSpan"></span> <strong>微信</strong>
			<div class="cartBox">
       		<div class="bjfff"></div>
			<div class="QR_code">
			 <p><img src="images/erweim.jpg" width="150px" height="150px" style=" margin-top:10px;" /></p>
			 <p>微信扫一扫，关注我们</p>
			</div>		
			</div>
			</li>

    <li class="fixeBoxLi Home"> <a href="./"> <span class="fixeBoxSpan"></span> <strong>收藏</strong> </a> </li>
    <li class="fixeBoxLi BackToTop"> <span class="fixeBoxSpan"></span> <strong>返回顶部</strong> </li>
  </ul>
</div>
</body>
</html>
