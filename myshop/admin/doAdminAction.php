<?php
require_once '../include.php';
$act=$_REQUEST['act'];
@$id=$_REQUEST['id'];
if($act=="logout"){
  logout();
}elseif($act=="addAdmin"){
  $mes=addAdmin();
}elseif($act=="editAdmin"){
  $mes=editAdmin($id);
}elseif($act=="delAdmin"){
  $mes=delAdmin($id);
}elseif($act=="addCate"){
  $mes=addCate();
}elseif($act=="editCate") {
  $where="id={$id}";
  $mes=editCate($where);
}elseif($act=="delCate"){
  $mes=delCate($id);
}elseif($act=="addPro"){
  $mes=addPro();
}elseif($act=="editPro"){
  $mes=editPro($id);
}elseif($act=="delPro"){
  $mes=delPro($id);
}elseif($act=="addUser"){
  $mes=addUser();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>表单处理</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
  <?php
    if(@$mes){
      echo $mes;
    }
  ?>
</body>
</html>