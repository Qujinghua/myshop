<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
</head>

<body>
<div class="headerBar">
  <div class="logoBar red_logo">
    <div class="comWidth">
      <div class="logo fl">
        <a href="#"><img width="120px" height="100px" src="images/logo.jpg" alt="民大"></a>
      </div>
      <h3 class="welcome_title">欢迎注册</h3>
    </div>
  </div>
</div>

<div class="regBox">
  <div class="login_cont">
  <form method="post" enctype="multipart/form-data" action="#" >
    <ul class="login">
      <li><span class="reg_item"><i>*</i>用户名：</span><div class="input_item"><input type="text"  name="username"  placeholder="请输入用户名" class="login_input user_icon" required="required"></div></li>
      <li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password"  name="password"   class="login_input user_icon"required="required"></div></li>
      <li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="email" name="email" placeholder="请输入合法邮箱" class="login_input user_icon"required="required"></div></li>
      <!-- <li><span class="reg_item"><i>*</i>性别：</span><div class="input_item">
      <input type="radio"  name="sex" value="1"> 男
      <input type="radio"  checked="checked" name="sex" value="2" > 女
      <input type="radio"  name="sex" value="3" > 保密
      </div></li> -->
      <li><span class="reg_item"><i>*</i>头像：</span><div class="input_item"><input type="file"  name="myFace" ></div></li>
      <li class="autoLogin"><span class="reg_item">&nbsp;</span><input type="checkbox" id="t1" class="checked"><label for="t1">我同意。。。</label></li>
      <li><span class="reg_item">&nbsp;</span><button style="border:none;width:266px;height:35px;outline:none;"><img src="images/reg.jpg" alt="" /></button></li>
    </ul>
    </form>
  </div>
</div>

<div class="hr_25"></div>
<div class="footer">
  <p><a href="#">商城简介</a><i>|</i><a href="#">商城公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：10086</p>
  <p>Copyright &copy; 2015 - 版权所有</p>
</div>
</body>
</html>
