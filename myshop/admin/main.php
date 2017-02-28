<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台主页</title>
</head>
<body>
<center>
	<h3>系统信息</h3>
	<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
		<tr>
			<th>操作系统</th>
			<td><?php echo PHP_OS;?></td>
		</tr>
		<tr>
			<th>Apache版本</th>
			<td><?php echo apache_get_version();?></td>
		</tr>
		<tr>
			<th>PHP版本</th>
			<td><?php echo PHP_VERSION;?></td>
		</tr>
		<tr>
			<th>运行方式</th>
			<td><?php echo PHP_SAPI;?></td>
		</tr>
	</table>
	<h3>软件信息</h3>
	<table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
		<tr>
			<th>系统名称</th>
			<td>电子商城</td>
		</tr>
		<tr>
			<th>开发团队</th>
			<td>渠景华、丁江浩、毕超越、贺培员</td>
		</tr>
		<tr>
			<th>公司网址</th>
			<td><a href="http://www.baidu.com">http://www.baidu.com</a></td>
		</tr>
		<tr>
			<th>成功案例</th>
			<td>我的商城</td>
		</tr>
	</table>
</center>

</body>
</html>