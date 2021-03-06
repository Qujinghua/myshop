<?php 
require_once 'include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
$proImgs=getProImgsById($id);
if(!($proImgs &&is_array($proImgs))){
  alertMes("商品图片错误", "index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商品介绍</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<link type="text/css" rel="stylesheet" media="all" href="styles/jquery.jqzoom.css"/>
<script src="scripts/jquery-1.6.js" type="text/javascript"></script>
<script src="scripts/jquery.jqzoom-core.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false,
      title:false,
      zoomWidth:410,
      zoomHeight:410
        });
  
});
</script>
</head>

<body class="grey">
<div class="headerBar">
  <div class="topBar">
    <div class="comWidth">
      <div class="rightArea">
        欢迎来到商城！<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
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
<div class="userPosition comWidth">
  <strong><a href="#">首页</a></strong>
  <span>&nbsp;&gt;&nbsp;</span>
  <a href="#"><?php echo $proInfo['cName'];?></a>
  <span>&nbsp;&gt;&nbsp;</span>
  <em><?php echo $proInfo['pSn'];?></em>
</div>
<div class="description_info comWidth">
  <div class="description clearfix">
    <div class="leftArea">
      <div class="description_imgs">
        <div class="big">
          <a href="image_800/<?php echo  $proImgs[0]['albumPath'];?>" class="jqzoom" rel='gal1'  title="triumph" >
                 <img width="309" height="340" src="image_350/<?php  echo $proImgs[0]['albumPath'];?>"  title="triumph">
              </a>
        </div>
        <ul class="des_smimg clearfix" id="thumblist" >
          <?php foreach($proImgs as $key=>$proImg):?>
          <li><a class="<?php echo $key==0?"zoomThumbActive":"";?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'image_800/<?php echo $proImg['albumPath'];?>'}"><img src="image_50/<?php echo $proImg['albumPath'];?>" alt=""></a></li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
    <div class="rightArea">
      <div class="des_content">
        <h3 class="des_content_tit"><?php echo $proInfo['pName'];?></h3>
        <div class="dl clearfix">
          <div class="dt">本商城价</div>
          <div class="dd clearfix"><span class="des_money"><em>￥</em><?php echo $proInfo['iPrice'];?></span></div>
        </div>
        <div class="dl clearfix">
          <div class="dt">优惠</div>
          <div class="dd clearfix"><span class="hg"><i class="hg_icon">满换购</i><em>购ipad加价优惠够配件或USB充电插座</em></span></div>
        </div>
        <div class="des_position">
          <div class="dl clearfix">
            <div class="dt">送到</div>
            <div class="dd clearfix">
              <div class="select">
                <h3>中南民族大学</h3><span></span>
                <ul class="show_select">
                  <li>民族大道</li>
                  <li>光谷广场</li>
                  <li>上钱村</li>
                </ul>
              </div>
              <span class="theGoods">有货，可当日出货</span>
            </div>
          </div>
          <div class="dl clearfix">
            <div class="dt colorSelect">选择颜色</div>
            <div class="dd clearfix">
              <div class="des_item des_item_acitve">
                WIFI 16GB
              </div>
              <div class="des_item">
                WIFI 16GB
              </div>
            </div>
          </div>
          <div class="dl clearfix">
            <div class="dt des_select_more">选择版本</div>
            <div class="dd clearfix ">
              <div class="des_item des_item_sm des_item_acitve">
                WIFI 16GB
              </div>
              <div class="des_item des_item_sm">
                WIFI 16GB + 3G
              </div>
              
            </div>
          </div>
          <div class="dl">
            <div class="dt des_num">数量</div>
            <div class="dd clearfix">
              <div class="des_number">
                <div class="reduction">-</div>
                <div class="des_input">
                  <input type="text">
                </div>
                <div class="plus">+</div>
              </div>
              <span class="xg">限购<em>9</em>件</span>
            </div>
          </div>
        </div>
        <div class="des_select">
          已选择 <span>"白色|WIFI 16G"</span>
        </div>
        <div class="shop_buy">
          <a href="#" class="shopping_btn"></a>
          <span class="line"></span>
          <a href="#" class="buy_btn"></a>
        </div>
        <div class="notes">
          注意：此商品可提供发票。
        </div>
      </div>
    </div>
  </div>
</div>
<div class="hr_15"></div>
<div class="hr_25"></div>
<div class="footer">
  <p><a href="#">商城简介</a><i>|</i><a href="#">商城公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：10086</p>
  <p>Copyright &copy; 2015 -  版权所有</p>
</div>
</body>
</html>
