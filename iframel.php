
<?php
include("conn/conn.php");
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
 session_start();
 if(!isset($_SESSION['username']))
 {
   echo "<script>alert('您还没有登录,请先登录!');location.href='index.php';</script>";
   exit;
  }else{

$id=$_GET['cpid'];
$fx=$_POST['fx'];
$time=date("Y-m-j");
$name=$_SESSION['username'];
$tupian=$_POST['tp'];
mysqli_query($conn,"insert into tb_pingjia (name,shijian,nr,image,cpid) values ('$name','$time','$fx','$tupian','$id') ");
echo "<script>alert('分享成功!');history.back();</script>";

}
?>
