<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="zh-CN">
		<meta name="Keywords" content="SuperSlide,jQuery-竖向导航（商城导航）">
		<meta name="Description" content="SuperSlide,jQuery-竖向导航（商城导航）">
		<title>SuperSlide - 竖向导航（商城导航）</title>

		<script type="text/javascript" src="../js/jquery1.42.min.js"></script>
		<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
		<script type="text/javascript" src="../js/angular.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/improts.css" />
		<link rel="stylesheet" type="text/css" href="../css/supershop.css"/>
		<link rel="stylesheet" type="text/css" href="../css/footer.css"/>
		<style type="text/css">
			.banner {
				position: relative;
				width: 1200px;
				height: 3000px;

				margin: 0 auto;
				/*background: #FF0000;*/
				overflow: hidden;
			}

		</style>
	</head>

	<body ng-app=""  >
		<!--导航栏-->
		<div class="header">
			<div class="header_top">
				<div class="top1">
					"欢迎来到二优品!"&nbsp;
					<a href="login.php">
						<?php
						$user="";
						if(isset($_GET["user"])){
							$user = $_GET["user"];
						}
						if($user != ""){
							echo $user;
						}else{
							echo "登录";
						}
						?>
					</a> |
					<a href="../register.html">注册</a>
				</div>
				<div class="top2">
					<div class="top2_page">
						<ul class="quick_menu">
							<li class="yphd help" style="position: relative;z-index: 999;margin-right: -10px;"><a href="#">帮助中心&#9660;</a>
								<div class="menu_hd_panel" style="background-color: white; ">
									<dl>
										<dt>帮助中心</dt>
										<dd>
											<a href="#">注册与登录</a>
											<a href="/showhtml/show_8.html">购买流程</a>
											<a href="/showhtml/show_13.html">优惠券使用 </a>
											<a href="/showhtml/show_19.html">货到付款</a>
											<a href="/showhtml/show_20.html">支付问题</a>
											<a href="/showhtml/show_24.html">退换货须知</a>
											<a href="/showhtml/show_27.html">关于退款</a>
											<a href="/showhtml/show_22.html">配送方式</a>
										</dd>
									</dl>
									<dl>
										<dt>客服专线</dt>
										<span class="cff4500">400-0099-230</span>
									</dl>
									<dl>
										<dt>微信客服：<span class="cff4500">eyoupin_com</span></dt>
									</dl>
								</div>
							</li>
							<li>|</li>
							<li class="yphd" style="position: relative;z-index: 999;margin-right: -10px;"><a href="#">微博微信&#9660;</a>
								<div class="menu_hd_panel" style="background-color: white;">
									<dl>
										<dt>新浪微博</dt>
										<dd>
											<a href="#"><img src="../img/sinaicon.gif" /></a>
										</dd>
									</dl>
									<dl>
										<dt>微信(微信扫一扫加我)</dt>
										<dd>
											<img src="../img/wc.jpg" />
										</dd>
									</dl>
								</div>
							</li>
							<li>|</li>
							<li><a href="#">收藏本站</a></li>
							<li>|</li>
							<li><a href="#">收藏夹</a></li>
							<li>|</li>
							<li class="yphd" style="position: relative;margin-right: -10px;"><a href="#">我的订单&#9660;</a>
								<div style="position: relative;" class="menu_hd_page">
									<ul class="menu_hd">
										<li><a style="color: #FE7B5C;" href="#">我的订单&#9650;</a></li>
										<li><a href="#">订单管理</a></li>
										<li><a href="">会员中心</a></li>
									</ul>
								</div>
							</li>
							<li>|</li>
							<li class="yphd" style="position: relative;margin-right: -10px;"><a href="#">优品互动&#9660;</a>
								<div style="position: relative;" class="menu_hd_page">
									<ul class="menu_hd">
										<li><a style="color: #FE7B5C;" href="#">优品互动&#9650;</a></li>
										<li><a href="#">积分大转盘</a></li>
										<li><a href="">每日签到</a></li>
										<li><a href="">苹果查询</a></li>
									</ul>
								</div>
							</li>
							<li>|</li>
							<li><a href="#">优品网首页</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--版头-->
		<div style="margin: auto;width: 1200px; height: 100px;">
			<div class="logo_search">
				<div class="logo">
					<a href="#" target="_blank">
						<img src="../img/logo.jpg" width="203" height="69">
					</a>
				</div>
				<div class="search">
					<div class="search_1">
						<div class="search_1_1">
							<input style="outline: none;" type="text" name="keyword" id="keyword">
						</div>
						<div class="search_1_2">
							<input name="" type="image" src="../img/search_1.gif">
						</div>
					</div>
					<div class="search_1_3">
						搜索：
						<script language="JavaScript1.1" src="/signin/ad/?adid=7"></script>
						<a href="/so/?fengge=1556909&amp;jixing=1590601&amp;tag8=1615388&amp;showfl=1&amp;order3=desc" class="linka5a5">iphone5s</a>
						<a href="/so/?keyword=iphone4&amp;showfl=1&amp;order3=desc" class="linka5a5">iphone4s</a>
						<a href="/so/?keyword=ipad2&amp;showfl=1&amp;order3=desc" class="linka5a5">ipad</a>
						<a href="/so/?keyword=i9500&amp;showfl=1&amp;order3=desc" class="linka5a5">i9500/S4</a>
						<a href="/so/?fengge=1557908&amp;jixing=1595150&amp;tag8=1615388&amp;showfl=1&amp;order3=desc" class="linka5a5">n7100</a>
					</div>
				</div>
				<div class="search_right"></div>
			</div>

			<div class="nav">
				<div class="header_line" style="width: 1200px;margin: auto;height: 43px;background-color: red;">
					<div class="fenlei">
						<h3 style="color: white;font-size: 16px; font-weight: bold;">全部商品分类  &#9660;</h3>
					</div>
					<div class="layout">
						<ul>
							<li><a href="#">首页</a></li>
							<li><a href="#">促销汇</a></li>
							<li><a href="#">品牌汇</a></li>
							<li><a href="#">新品</a></li>
							<li class="qwgo"><a href="#">趣味购</a>
								<div class="qwnav">
									<p>
										<strong>星座配件</strong>
										    <a href="/zt/xingzuo/1/">白羊座</a>
											<a href="/zt/xingzuo/2/">金牛座</a>
											<a href="/zt/xingzuo/3/">双子座</a>
											<a href="/zt/xingzuo/4/">巨蟹座</a>
											<a href="/zt/xingzuo/5/">狮子座</a>
											<a href="/zt/xingzuo/6/">处女座</a>
											<a href="/zt/xingzuo/7/">天秤座</a>
											<a href="/zt/xingzuo/8/">天蝎座</a>
											<a href="/zt/xingzuo/9/">射手座</a>
											<a href="/zt/xingzuo/10/">摩羯座</a>
											<a href="/zt/xingzuo/11/">水瓶座</a>
											<a href="/zt/xingzuo/12/">双鱼座</a>
									  </p>
									  <hr />
										<p><strong>帮我选购</strong>
											<a href="/kpl/">看评论选购</a>
										</p>
										<hr />
										<p><strong>互动有奖</strong>
											<a href="/huodong/qiandao/">每日签到</a>
											<a href="/huodong/djp/">超级大转盘</a>
										</p>
								</div>

							</li>
							<li><a href="#">夜总惠</a></li>
							<li><a href="#">苹果序列号查询</a></li>
							<li><a href="#">超级0元购</a></li>
						</ul>
					</div>
					<div style="float:right; color: #fff; margin-top:3px;">
						<div class="so1bew">
							<div class="so1bew_1">
								<ul id="navbuy">
									<li class="topli">
										<script language="JavaScript1.1" src="/signin/c_login1/"></script>
										<a class="topa" href="../car.html">
											<div class="cart">购物车<span class="cff4500">0</span>件</div>
										</a>
									</li>
								</ul>
								<ul class="downul">
									<h3>最近加入的宝贝：</h3>
									<script language="JavaScript1.1" src="/signin/mybuy/"></script>
									<p class="plook">
										<a href="../car.html" class="look"><img src="img/img01.gif" alt="加入购物车" width="72" height="20"></a>
									</p>
								</ul>
							</div>
							<div class="so1bew_2"><a href="/order/shopbuy/?action=show">立即结算</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--<div ng-include="'header_title.php'"></div>-->

<!--		中间的详情页面，做了一下商品推荐-->
		<div class="banner" >

			<ul id="nav">

				<li id="mainCate-1" class="mainCate">
					<h3><span>&gt;</span><a href="#">苹果专区</a></h3>
					<p>
						<a href="#">iphohe5c |</a>
						<a href="#"> iphohe5s |</a>
						<a href="#">ipad</a>
					</p>

					<div class="subCate">
						<ul id="sub-ul-1">
							<h4>苹果保护壳/保护套</h4>

							<li>
								<div class="subdiv">
									<a href="#">iphone5/5S</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5C</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5/5S</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5C</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5/5S</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5C</a>
								</div>
								<div class="subdiv">
									<a href="#">ipad</a>
								</div>
								<div class="subdiv">
									<a href="#">iphone5C</a>
								</div>
							</li>
						</ul>
						<div id="sub-div-1">
							<div>热门品牌</div>
							<div>
								<a>卡来登</a>
							</div>
							<div>
								<a>洛克</a>
							</div>
							<div>
								<a>星期八</a>
							</div>
							<div>
								<a>倍思</a>
							</div>
							<div>
								<a>REMAX</a>
							</div>
							<div>
								<a>REMAX</a>
							</div>
						</div>

					</div>

				</li>

				<li id="mainCate-2" class="mainCate  ">
					<h3><span>&gt;</span><a href="#">三星专区</a></h3>
					<p>
						<a href="#">Noto3 |</a>
						<a href="#">I9500/S4 |</a>
						<a href="#">N7100</a>
					</p>

					<div class="subCate">
						<div style="height:300px;">
							葡萄酒
						</div>
					</div>
				</li>

				<li id="mainCate-3" class="mainCate">
					<h3><span>&gt;</span><a href="#">智能手机</a></h3>
					<p>
						<a href="#">小米 |</a>
						<a href="#">华为 |</a>
						<a href="#">HTC</a>
					</p>

					<div class="subCate">
						<div style="height:300px;">
							洋酒
						</div>
					</div>
				</li>

				<li id="mainCate-4" class="mainCate  ">
					<h3><span>&gt;</span><a href="#">电池耳机车载</a></h3>
					<p>
						<a href="#">蓝牙耳机 |</a>
						<a href="#">移动电源 |</a>
						<a href="#">电池</a>
					</p>

					<div class="subCate">
						<div style="height:300px;">
							电池耳机车载
						</div>
					</div>
				</li>

				<li id="mainCate-5" class="mainCate">
					<h3><span>&gt;</span><a href="#">手机周边配件</a> </h3>
					<p>
						<a href="#">贴膜 |</a>
						<a href="#">防尘塞 |</a>
						<a href="#">数据线</a>

					</p>
					<div class="subCate">
						<div style="height:300px;">
							保健酒
						</div>
					</div>
				</li>

				<li id="mainCate-6" class="mainCate  ">
					<h3><span>&gt;</span><a href="#">小优导购</a></h3>
					<p>
						<a href="#">品牌</a>
						<a href="#">促销</a>
						<a href="#">新品</a>

					</p>
					<div class="subCate">
						<div style="height:300px;">
							酒具
						</div>
					</div>
				</li>

			</ul>

			<div class="focusBox" style="margin:0 auto">
				<ul class="pic">
					<li>
						<a href="http://www.SuperSlide2.com" target="_blank">
							<img alt="" src="img/banner/banner01.jpg">
						</a>
					</li>
					<li>
						<a href="http://www.SuperSlide2.com" target="_blank"><img alt="" src="img/banner/banner07.jpg"></a>
					</li>
					<li>
						<a href="http://www.SuperSlide2.com" target="_blank"><img alt="" src="img/banner/banner08.jpg"></a>
					</li>
					<li>
						<a href="http://www.SuperSlide2.com" target="_blank"><img alt="" src="img/banner/banner08.jpg"></a>
					</li>
				</ul>
				<a class="prev" href="javascript:void(0)"></a>
				<a class="next" href="javascript:void(0)"></a>
				<ul class="hd">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>

			<!--今天优惠-->
			<div class="favorable">
				<span id="">
					<img src="img/titl_03.jpg"/>
				</span>
				<a href="#">更多</a>
			</div>
			<!--今天优惠里面的图片-->
			<div class="favorableBox">
				<div class="fBox">
					<div class="fBoxPic">
						<p>
							<a href="">苹果iphone6 手机壳 超薄透明4.</a>
						</p>
						<div id="">
							<img class="fBpic" src="../img/20141016172821.jpg" />
						</div>
						<div style="margin-top: -10px;">
							<dd id="">
								原价168元
							</span>
							<span class="fBnum">
								0
							</span>
							<span id="">
								人已经购买
							</span>
						</div>
					</div>
					<div class="fBBot">
						<dd class="fBBotFot1">
					 			￥
					 	</dd>
					 	<dd class="fBBotFot2">
					 			1445
					 	</dd>
					 	<a class="fBBotBuy" href="#">购买</a>
					</div>
				</div>

				<div class="fBox">
					<div class="fBoxPic">
						<p>
							<a href="">苹果iphone6 手机壳 超薄透明4.</a>
						</p>
						<div id="">
							<img class="fBpic" src="../img/20141016172821.jpg" />
						</div>
						<div style="margin-top: -10px;">
							<dd id="">
								原价168元
							</span>
							<span class="fBnum">
								0
							</span>
							<span id="">
								人已经购买
							</span>
						</div>
					</div>
					<div class="fBBot">
						<dd class="fBBotFot1">
					 			￥
					 	</dd>
					 	<dd class="fBBotFot2">
					 			1445
					 	</dd>
					 	<a class="fBBotBuy" href="#">购买</a>
					</div>
				</div>
			 <div class="fBox">
					<div class="fBoxPic">
						<p>
							<a href="">苹果iphone6 手机壳 超薄透明4.</a>
						</p>
						<div id="">
							<img class="fBpic" src="../img/20141016172821.jpg" />
						</div>
						<div style="margin-top: -10px;">
							<dd id="">
								原价168元
							</span>
							<span class="fBnum">
								0
							</span>
							<span id="">
								人已经购买
							</span>
						</div>
					</div>
					<div class="fBBot">
						<dd class="fBBotFot1">
					 			￥
					 	</dd>
					 	<dd class="fBBotFot2">
					 			1445
					 	</dd>
					 	<a class="fBBotBuy" href="#">购买</a>
					</div>
				</div>
			 <div class="fBox">
					<div class="fBoxPic">
						<p>
							<a href="">苹果iphone6 手机壳 超薄透明4.</a>
						</p>
						<div id="">
							<img class="fBpic" src="../img/20141016172821.jpg" />
						</div>
						<div style="margin-top: -10px;">
							<dd id="">
								原价168元
							</span>
							<span class="fBnum">
								0
							</span>
							<span id="">
								人已经购买
							</span>
						</div>
					</div>
					<div class="fBBot">
						<dd class="fBBotFot1">
					 			￥
					 	</dd>
					 	<dd class="fBBotFot2">
					 			1445
					 	</dd>
					 	<a class="fBBotBuy" href="#">购买</a>
					</div>
				</div>

			 <div class="fBox">
					<div class="fBoxPic">
						<p>
							<a href="">苹果iphone6 手机壳 超薄透明4.</a>
						</p>
						<div id="">
							<img class="fBpic" src="../img/20141016172821.jpg" />
						</div>
						<div style="margin-top: -10px;">
							<dd id="">
								原价168元
							</span>
							<span class="fBnum">
								0
							</span>
							<span id="">
								人已经购买
							</span>
						</div>
					</div>
					<div class="fBBot">
						<dd class="fBBotFot1">
					 			￥
					 	</dd>
					 	<dd class="fBBotFot2">
					 			1445
					 	</dd>
					 	<a class="fBBotBuy" href="#">购买</a>
					</div>
				</div>
			 </div>


			<!--每个楼层里面的物品-->
			<div class="oneFloor">
				<div class="oneFloorTitle">
					1F 苹果iphone、ipad保护壳
				</div>
				<div class="oneFloorRight">
					<a href="#">iphone4s</a>
 						|
 					<a href="#">iphone5</a>
				</div>
			</div>
			<div class="oneFloorBox">
				<div class="oneFloorDetail">
					<div class="detailBox">
						<div class="iphonesBox"  >
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-01.png" />
								</a>
							</div>
							<div class="iphones">
								<a href="#" class="iphones">
									<img src="../img/1f-02.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-03.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="img/1f-04.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-05.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-06.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-07.png" />
								</a>
							</div>
							<div class="iphones"  >
								<a href="#" class="iphones">
									<img src="../img/1f-08.png" />
								</a>
							</div>

						</div>
						<div class="iphonesPic"  >
							<a href="#">
								<img src="../img/mod_ad13.jpg" />
							</a>
						</div>
					</div>
					<div class="detailBottom">
						<div class="detB">
							<a href="#">
								<img class="detBimg" src="../img/2013109112914.jpg" />
							</a>

							<div class="detBut">
								<div class="detBDiv">
									<a href="">iPhone5土豪金贴膜 苹果5S全边框贴纸 金</a>
								</div>
								<div class="detBDiv">

									<div>
										￥9
									</div>
									<div>
										原价:39
									</div>
								</div>
								<div class="detBNum">
									已售：3421
								</div>
							</div>
						</div>

						<div class="detB">
							<a href="#">
								<img class="detBimg" src="../img/2013109112914.jpg" />
							</a>

							<div class="detBut">
								<div class="detBDiv">
									<a href="">iPhone5土豪金贴膜 苹果5S全边框贴纸 金</a>
								</div>
								<div class="detBDiv">

									<div>
										￥9
									</div>
									<div>
										原价:39
									</div>
								</div>
								<div class="detBNum">
									已售：3421
								</div>
							</div>
						</div>

						<div class="detB">

							<a href="#">
								<img class="detBimg" src="../img/2013109112914.jpg" />
							</a>
							<div class="detBut">
								<div class="detBDiv">
									<a href="">iPhone5土豪金贴膜 苹果5S全边框贴纸 金</a>
								</div>
								<div class="detBDiv">

									<div>
										￥9
									</div>
									<div>
										原价:39
									</div>
								</div>
								<div class="detBNum">
									已售：3421
								</div>
							</div>
						</div>

						<div class="detB">

							<a href="#">
								<img class="detBimg" src="../img/2013109112914.jpg" />
							</a>
							<div class="detBut">
								<div class="detBDiv">
									<a href="">iPhone5土豪金贴膜 苹果5S全边框贴纸 金</a>
								</div>
								<div class="detBDiv">

									<div>
										￥9
									</div>
									<div>
										原价:39
									</div>
								</div>
								<div class="detBNum">
									已售：3421
								</div>
							</div>
						</div>

						<div class="detB">

							<a href="#">
								<img class="detBimg" src="../img/2013109112914.jpg" />
							</a>
							<div class="detBut">
								<div class="detBDiv">
									<a href="">iPhone5土豪金贴膜 苹果5S全边框贴纸 金</a>
								</div>
								<div class="detBDiv">

									<div>
										￥9
									</div>
									<div>
										原价:39
									</div>
								</div>
								<div class="detBNum">
									已售：3421
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="oneFloorSilder">
					<div class="oneFSildTitle"  >
						iphone手机壳单品排行榜
					</div>
					<dl class="tabRank" id="tabRank">

						<dd class="bd">
							<ul class="ulList">
								<li class="t on">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/1.jpg"></a>
										</div>

									</div>
									<div class="pubtitle">
										<a href="#">iphone4s皮套苹果4手机壳￥45</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/2.jpg"></a>
										</div>
									</div>
									<div class="pubtitle">
										<a href="#">iphone5s皮套苹果5手机壳￥9</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/1.jpg"></a>
										</div>

									</div>
									<div class="pubtitle">
										<a href="#">iphone4s皮套苹果4手机壳￥45</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/2.jpg"></a>
										</div>
									</div>
									<div class="pubtitle">
										<a href="#">iphone5s皮套苹果5手机壳￥9</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/1.jpg"></a>
										</div>

									</div>
									<div class="pubtitle">
										<a href="#">iphone4s皮套苹果4手机壳￥45</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/2.jpg"></a>
										</div>
									</div>
									<div class="pubtitle">
										<a href="#">iphone5s皮套苹果5手机壳￥9</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/1.jpg"></a>
										</div>

									</div>
									<div class="pubtitle">
										<a href="#">iphone4s皮套苹果4手机壳￥45</a>
									</div>
								</li>
								<li class="t">

									<div class="c ">
										<div class="pubpic">
											<a href="#"><img src="../img/2.jpg"></a>
										</div>
									</div>
									<div class="pubtitle">
										<a href="#">iphone5s皮套苹果5手机壳￥9</a>
									</div>
								</li>
							</ul>

						</dd>

					</dl>
				</div>

			</div>


		</div>

		<div ng-include="'../footer.html'"></div>

	</body>

</html>
<script type="text/javascript ">

	jQuery("#nav ").slide({
		type: "menu ", //效果类型
		titCell: ".mainCate ", // 鼠标触发对象
		targetCell: ".subCate ", // 效果对象，必须被titCell包含
		delayTime: 0, // 效果时间
		triggerTime: 0, //鼠标延迟触发时间
		defaultPlay: false, //默认执行
		returnDefault: true //返回默认
	});
	jQuery(".focusBox").slide({
		mainCell: ".pic",
		effect: "left",
		autoPlay: true,
		delayTime: 300
	});
		$("#tabRank li").hover(function() {
		$(this).addClass("on").siblings().removeClass("on")
	}, function() {});
	/* Tab切换 */
	$("#tabRank").slide({
		titCell: "dt h3",
		mainCell: "dd",
		autoPlay: false,
		effect: "left",
		delayTime: 300
	});
</script>