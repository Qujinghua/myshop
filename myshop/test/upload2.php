<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <form action="doAction3.php" method="post" enctype="multipart/form-data">
      <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/> -->
      请选择上传文件：<input type="file" name="myFile[]" /><br>
      请选择上传文件：<input type="file" name="myFile[]" /><br>
      请选择上传文件：<input type="file" name="myFile[]" /><br>
      <input type="submit" value="上传"/>
    </form>
</body>
</html>