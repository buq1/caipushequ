<?php
include("conn/conn.php");
 /**
 * 向数据库中插入图片
 * 编辑：www.jbxue.com
 */
 $imgfile=$_FILES['imgfile'];
 $submitbtn=$_POST['submitbtn'];
 if($submitbtn=='OK' and is_array($imgfile)){
 $name=$imgfile['name'];  //取得图片名称
 $type=$imgfile['type']; //取得图片类型
 $size=$imgfile['size'];  //取得图片长度
 $tmpfile=$imgfile['tmp_name'];  //图片上传上来到临时文件的路径
 if($tmpfile and is_uploaded_file($tmpfile)){  //判断上传文件是否为空，文件是不是上传的文件
  //读取图片流
  $imgdata=mysqli_real_escape_string($conn,file_get_contents($tmpfile));
   //bin2hex()将二进制数据转换成十六进制表示

 
  if(mysqli_query($conn,"insert into tb_test(name,type,image) values ('".$name."','".$type."','".$imgdata."')")){
   echo "<center>插入成功！<br><br><a href='disimage.php'>显示图片</a></center>";
  }
  else{
   echo "<center>插入失败！</center>";
 
 echo $name;
 echo $type;
 echo $imgdata;
  }
 }else
 echo "<center>请先选择图片！<br><br><a href='image.html'>点此返回</a></center>";
} else
 echo "<center>请先选择图片！<br><br><a href='image.html'>点此返回</a></center>";
?>