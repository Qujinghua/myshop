<?php 
require_once 'include.php';
$cates=getAllcate();
if(!($cates && is_array($cates))){
	alertMes("不好意思，网站维护中!!!", "http://www.jd.com");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<script src="js/jquery.js" href=""></script>
<script src="js/text.js" href=""></script>
</head>
<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏</a>
			</div>
			<div class="rightArea">
				欢迎来到本商城！
				<?php if(@$_SESSION['loginFlag']):?>
				<span>欢迎您</span><?php echo $_SESSION['username'];?>
				<a href="doAction.php?act=userOut">[退出]</a>
				<?php else:?>
				<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
				<?php endif;?>
			</div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
        <a href="#"><img width="120px" height="100px" src="images/logo.jpg" alt="民大"></a>
      </div>
			<div class="search_box fl">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr">
			</div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0</span>
			</div>
		</div>
	</div>
</div>
<div class="bi">
	<div class="pic">
		<img src="images/1.jpg" style="display:block">
		<img src="images/2.jpg">
		<img src="images/3.jpg">
		<img src="images/4.jpg">
		<img src="images/5.jpg">
	</div>
	<div class="l-arr arr"> &lt; </div><!-- 左箭头 -->
	<div class="r-arr arr"> &gt; </div>
	<div class="but">
		<ul>
			<li class="hover">1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
			<li>5</li>
		</ul>
	</div>
</div>
<!-- <div class="banner comWidth clearfix">
	<div class="banner_bar banner_big">
		<ul class="imgBox">
			<li><a href="#"><img src="images/banner/banner_01.jpg" alt="banner"></a></li>
			<li><a href="#"><img src="images/banner/banner_02.jpg" alt="banner"></a></li>
		</ul>
		<div class="imgNum">
			<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
		</div>
	</div>
</div> -->
<?php foreach($cates as $cate):?>
<div class="shopTit comWidth">
	<span class="icon"></span><h3><?php echo $cate['cName'];?></h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li><a href="#"><img src="images/banner/banner_sm_01.jpg" alt="banner"></a></li>
				<li><a href="#"><img src="images/banner/banner_sm_02.jpg" alt="banner"></a></li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a><a href="#"></a><a href="#"></a><a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top clearfix">
		<?php 
			$pros=getProsByCid($cate['id']);
			if($pros &&is_array($pros)):
			foreach($pros as $pro):
			$proImg=getProImgById($pro['id']);
		?>
			<div class="shop_item">
				<div class="shop_img">
					<a href="proDetails.php?id=<?php echo $pro['id'];?>" target="_blank"><img height="200" width="187" src="image_220/<?php echo $proImg['albumPath'];?>" alt=""></a>
				</div>
				<h6><?php echo $pro['pName'];?></h6>
				<p><?php echo $pro['iPrice'];?>元</p>
			</div>
			<?php 
			endforeach;
			endif;
			?>
			
		</div>
		<div class="shopList_sm clearfix">
		<?php 
			$prosSmall=getSmallProsByCid($cate['id']);
			if($prosSmall &&is_array($prosSmall)):
			foreach($prosSmall as $proSmall):
			$proSmallImg=getProImgById($proSmall['id']);
		?>
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="proDetails.php?id=<?php echo $proSmall['id'];?>" target="_blank"><img width="95" height="95" src="image_220/<?php echo $proSmallImg['albumPath'];?>" alt=""></a>
				</div>
				<div class="shopItem_text">
					<p><?php echo $proSmall['pName'];?></p>
					<h3>￥<?php echo $proSmall['iPrice'];?>	</h3>
				</div>
			</div>
			<?php 
			endforeach;
			endif;
			?>
		</div>
	</div>
</div>
<?php endforeach;?>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">商城简介</a><i>|</i><a href="#">商城公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：10086/p>
	<p>Copyright &copy; 2015 -  </p>
</div>
</body>
</html>
