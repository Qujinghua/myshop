<?php
require_once '../lib/string.func.php';
header("content-type:text/html;charset=utf-8");
//$_FILES
//print_r($_FILES);

// $filename=$_FILES['myFile']['name'];
// $type=$_FILES['myFile']['type'];
// $tmp_name=$_FILES['myFile']['tmp_name'];
// $error=$_FILES['myFile']['error'];
// $size=$_FILES['myFile']['size'];


function uploadFile($fileInfo,$path="uploads",$allowExt=array("jpg","jpeg","png","wbmp","gif"),$maxSize=1048576,$imgFlag=true){
//$allowExt=array("jpg","jpeg","png","wbmp","gif");
//$maxSize=1048576;
//$imgFlag=true;
//判断错误信息
if($fileInfo['error']==UPLOAD_ERR_OK){
  $ext=getExt($fileInfo['name']);
  //限制文件上传类型
  if(!in_array(@$ext,$allowExt)){
    exit("非法文件类型");
  }
  if($fileInfo['size']>$maxSize){
    exit("文件过大");
  }
  if($imgFlag){
    //如何验证图片是否是一个真正的图片类型
    //getimagesize($filename):验证文件是否是图片类型
    $info=getimagesize($fileInfo['tmp_name']);
    // var_dump($info);exit;
    if(!$info){
      exit("不是真正的图片类型");
    }
  }
  //需要判断下文件是否是通过HTTP POST方式上传上来的
  //is_uploaded_file($tmp_name);
  
  $filename=getUniName().".".$ext;
  // if(!file_exists($path)){
  //   mkdir($path,0777,true);
  // }
  // $path="uploads";
  $destination=$path."/".$filename;
  if(is_uploaded_file($fileInfo['tmp_name'])){
    if(move_uploaded_file($fileInfo['tmp_name'],$destination)){
      $mes="文件上传成功";
    }else{
      $mes="文件移动失败";
    }
  }else{
    $mes="文件不是通过HTTP POST方式上传上来的";
  }
}else{
  switch ($fileInfo['error']) {
    case 1:
      # code...
      $mes="超过了配置文件上传大小";//UPLOAD_ERR_INI_SiZE
      break;
    case 2:
      # code...
      $mes="超过了表单设置上传文件大小";//UPLOAD_ERR_FORM_SIZE
      break;
    case 3:
      # code...
      $mes="文件部分被上传";     //UPLOAD_ERR_PARTIAL
      break;
    case 4:
      # code...
      $mes="没有文件被上传";     //UPLOAD_ERR_NO_FILE
      break;
    case 6:
      # code...
      $mes="没有找到临时目录";//UPLOAD_ERR_NO_TMP_DIR
      break;
    case 7:
      # code...
      $mes="文件不可写";  //UPLOAD_ERR_CANT_WRITE
      break;
    case 8:
      # code...
    $mes="由于PHP的扩展程序中断了文件上传";//UPLOAD_ERR_EXIENSION
      break;
  }
}
return $mes;

}



//1 file_uploads = On,支持通过HTTP POST方式上传文件
//2 upload_tmp_dir=    临时文件保存目录
//3 upload_max_filesize =    上传文件默认最大值
//4 post_max_size =     表单以POST方式发送数据的最大值

