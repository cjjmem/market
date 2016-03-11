<?php exit;?>a:3:{s:8:"template";a:7:{i:0;s:71:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/group_buy_list.dwt";i:1;s:76:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/page_header.lbi";i:2;s:72:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/ur_here.lbi";i:3;s:78:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/category_tree.lbi";i:4;s:72:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/history.lbi";i:5;s:70:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/pages.lbi";i:6;s:76:"F:/web/www/market.com/upload/themes/mbyunchaoshi2015/library/page_footer.lbi";}s:7:"expires";i:1457667924;s:8:"maketime";i:1457664324;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>团购商品_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/mbyunchaoshi2015/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
 
<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block">     
    
        <ul class="top_bav_l">
            <li class="top_sc">
               <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a>
    		</li>
            <li>关注我们：</li>
            <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
            	<a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a> 
            	<div id=DisSub_1 class="top_nav_box  top_weibo"> 
            		<a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
            		<a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
            	</div> 
            </li> 
            <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
            	<a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
            	<div id="DisSub_2" class="weixinBox" style="display: none;"> 
           			<img src="themes/mbyunchaoshi2015/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> 
            	</div> 
            </li>
        </ul>
    
        <div class="header_r">
        
        <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>        <font id="ECS_MEMBERZONE" >554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
     
                                        <a href="flow.php" >查看购物车</a>
                                         |
                                                   <a href="pick_out.php" >选购中心</a>
                                         |
                                                   <a href="tag_cloud.php" >标签云</a>
                                         |
                                                   <a href="quotation.php" >报价单</a>
                                                    
        </div>
    </div>
</div>
<div class=" block header_bg" style="margin-bottom: 0px;">
  <div class="clear_f"></div>
  <div class="header_top logo_wrap"> 
  <a class="logo_new" href="index.php"><img src="themes/mbyunchaoshi2015/images/logo.gif" /></a>
    <div class="ser_n">
    <div class="g-search">
      <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
        <div class="search-keyword-box">   
    
        <input name="keywords" type="text" id="keyword" value="" class="search-keyword"  onClick="if(this.value==''){this.value=''}"/>
     </div>
        
        <input type="submit"  name="imageField" class="search-btn" value="">
       
      </form>
      <div id="test" class="g-search-hotwords">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
	
    </script>
      </div>
      </div>
      
    </div>
    <div class="home-ann">
    <div class="ann-box">
        <ul class="cart_info">
          <li id="ECS_CARTINFO">
            <span class="carts_num none_f">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span> 
            <em class="i_cart">&nbsp;</em>
            <a href="flow.php" class="a_cart">
                <span style="float:left;">去购物车结算</span>
                <span class="iconfont"><i></i></span>
            </a>
          </li>
        </ul>
    </div>
    </div>
  </div>
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="ng-sort "><div class="nav_top"><a class="ng-all-hook" href="#"><span style="color:#FFF;">全部商品分类</span></a></div></div>
<div class="menu">
  	<a href="index.php">首页</a>
    
        	<a href="category.php?id=3"  >GSM手机</a>
        	<a href="category.php?id=5"  >双模手机</a>
        	<a href="category.php?id=6"  >手机配件</a>
        	<a href="group_buy.php"   class="cur">团购商品</a>
        	<a href="activity.php"  >优惠活动</a>
        	<a href="snatch.php"  >夺宝奇兵</a>
        	<a href="auction.php"  >拍卖活动</a>
        	<a href="exchange.php"  >积分商城</a>
        	<a href="message.php"  >留言板</a>
        	<a href="http://bbs.ecshop.com/" target="_blank"  >EC论坛</a>
    </div> 
</div>
</div>
 
 
 
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="group_buy.php">团购商品</a> 
</div>
</div>
<div class="blank"></div><div class="block clearfix">
  
  <div class="AreaL">
    
  
    
  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" style=" overflow:hidden;" >
   <div class="box1 cate" id="cate">
					<h1 onclick="tab(0)"  
		
		
		        style="border-top:none"
         
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/mbyunchaoshi2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=1" class="  f_l">手机类型</a>
		</h1>
		<ul style="display:none; margin-left:30px;">
				 <a class="over_2" href="category.php?id=2">CDMA手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=3">GSM手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=4">3G手机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=5">双模手机</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
					<h1 onclick="tab(1)"  
		
		
		 
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/mbyunchaoshi2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=6" class="  f_l">手机配件</a>
		</h1>
		<ul style="display:none; margin-left:30px;">
				 <a class="over_2" href="category.php?id=7">充电器</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=8">耳机</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=9">电池</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=11">读卡器和内存卡</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
					<h1 onclick="tab(2)"  
		
		
		 
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/mbyunchaoshi2015/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="category.php?id=12" class="  f_l">充值卡</a>
		</h1>
		<ul style="display:none; margin-left:30px;">
				 <a class="over_2" href="category.php?id=13">小灵通/固话充值卡</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=14">移动手机充值卡</a>  
		 
<div class="clearfix">
</div>   
				 <a class="over_2" href="category.php?id=15">联通手机充值卡</a>  
		 
<div class="clearfix">
</div>   
				</ul>
		<div style="clear:both"></div>
	 
</div>
<div style="clear:both"></div>  
</div>  
 
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/mbyunchaoshi2015/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/mbyunchaoshi2015/images/btn_unfold.gif"
		}
}
</script>    
    
    
    
    <div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
	 
   
   <div class="box">
   <div class="box_1">
    <h3><span>团购商品：</span></h3>
    <div class="boxCenterList">
                  <ul class="group clearfix">
      <li class="f_l">
      <a href="group_buy.php?act=view&amp;id=8"><img src="images/200905/thumb_img/24_thumb_G_1241971981429.jpg" border="0" alt="P806" style="vertical-align: middle" /></a>
      </li>
      <li class="f_r" style="float:right; margin-right:130px;">
      团购商品：<a href="group_buy.php?act=view&amp;id=8" class="f5">P806</a><br />
      起止时间：2009-05-15 08:00:00 -- 2010-05-26 08:00:00<br />
      价格阶梯：<br />
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
       <tr>
          <th width="29%" bgcolor="#FFFFFF">数量</th>
         <th width="71%" bgcolor="#FFFFFF">价格</th>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">5</td>
         <td width="71%" bgcolor="#FFFFFF">￥1910元</td>
        </tr>
                <tr>
          <td width="29%" bgcolor="#FFFFFF">10</td>
         <td width="71%" bgcolor="#FFFFFF">￥1860元</td>
        </tr>
              </table>
      </li>
      </ul>
                </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="/group_buy.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>1</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>
  
</div>
<div class="ng-footer">
  <div class="ng-ser-box">
  <div class="ng-ser-box-con">
    
     
      <div class="ng-help-box"> 
     
        <dl>
      <dt>新手上路 </dt>
     
                <dd><a target="_blank" href="article.php?id=9" title="售后流程" >售后流程</a></dd>
                <dd><a target="_blank" href="article.php?id=10" title="购物流程" >购物流程</a></dd>
                <dd><a target="_blank" href="article.php?id=11" title="订购方式" >订购方式</a></dd>
            
    </dl>
     
     
        <dl>
      <dt>手机常识 </dt>
     
                <dd><a target="_blank" href="article.php?id=12" title="如何分辨原装电池" >如何分辨原装电池</a></dd>
                <dd><a target="_blank" href="article.php?id=13" title="如何分辨水货手机 " >如何分辨水货手机</a></dd>
                <dd><a target="_blank" href="article.php?id=14" title="如何享受全国联保" >如何享受全国联保</a></dd>
            
    </dl>
     
     
        <dl>
      <dt>配送与支付 </dt>
     
                <dd><a target="_blank" href="article.php?id=15" title="货到付款区域" >货到付款区域</a></dd>
                <dd><a target="_blank" href="article.php?id=16" title="配送支付智能查询 " >配送支付智能查询</a></dd>
                <dd><a target="_blank" href="article.php?id=17" title="支付方式说明" >支付方式说明</a></dd>
            
    </dl>
     
     
        <dl>
      <dt>会员中心</dt>
     
                <dd><a target="_blank" href="article.php?id=18" title="资金管理" >资金管理</a></dd>
                <dd><a target="_blank" href="article.php?id=19" title="我的收藏" >我的收藏</a></dd>
                <dd><a target="_blank" href="article.php?id=20" title="我的订单" >我的订单</a></dd>
            
    </dl>
     
     
        <dl>
      <dt>服务保证 </dt>
     
                <dd><a target="_blank" href="article.php?id=21" title="退换货原则" >退换货原则</a></dd>
                <dd><a target="_blank" href="article.php?id=22" title="售后服务保证 " >售后服务保证</a></dd>
                <dd><a target="_blank" href="article.php?id=23" title="产品质量保证 " >产品质量保证</a></dd>
            
    </dl>
     
     
        <dl>
      <dt>联系我们 </dt>
     
                <dd><a target="_blank" href="article.php?id=24" title="网站故障报告" >网站故障报告</a></dd>
                <dd><a target="_blank" href="article.php?id=25" title="选机咨询 " >选机咨询</a></dd>
                <dd><a target="_blank" href="article.php?id=26" title="投诉与建议 " >投诉与建议</a></dd>
            
    </dl>
     
     
    </div>
        
    </div>
 
    
    
     </div>
     
    <div class="ft-bg">
    <div class="ft_main">
      <div class="ft_txt">
        <p>&copy; 2005-2016 ECSHOP 版权所有，并保留所有权利。ICP备案证书号：<a href="http://www.miitbeian.gov.cn" target="_blank" rel="nofollow"></a></p>
        <p class="ft_contact"> <span>服务时间：09:00-23:00</span> </p>
          
                  
        <div align="center" style="margin:5px 0;"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/mbyunchaoshi2015/images/ecmoban.gif" alt="ECShop模板"></a></div>
        <p class="beian-logos"> <a href="javascript:void(0);" target="_blank"><img alt="ECSHOP获得电商金典奖" src="themes/mbyunchaoshi2015/images/flogo-jindian.png"></a> <a href="javascript:void(0);l" target="_blank"><img alt="中国人保为ECSHOP承保" src="themes/mbyunchaoshi2015/images/flogo-picc.png"></a> <a href="javascript:void(0);" target="_blank"><img alt="互联网协会A级信用认证" src="themes/mbyunchaoshi2015/images/flogo-xinyong.png"></a> <a href="javascript:void(0);" target="_blank"><img alt="ECSHOP可信网站权威认证" src="http://cdn.lizi.com/images/flogo-kexin.png" class="no-border"></a> </p>
      </div>
    </div>
  </div>
</div>
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>
      9:00-18:00</div>
    <div class="con">
      <ul>
        
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        
              </ul>
    </div>
    <div class="b"></div>
  </div>
  <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
</body>
</html>