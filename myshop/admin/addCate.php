<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>添加分类</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
  <h2>添加分类</h2>
    <form action="doAdminAction.php?act=addCate" method="post">
      <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
        <tr>
          <td align="right">分类名称</td>
          <td><input type="text" name="cName" placeholder="请输入分类名称"/></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="添加分类"/></td>
        </tr>
      </table>
    </form>
</body>
</html>