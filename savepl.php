<?php
include("conn/conn.php");
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
 session_start();
 if(!isset($_SESSION['username']))
 {
   echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
   exit;
  }else{

$id=$_GET['cpid'];
$pl=$_POST['pl'];
$time=date("Y-m-j");
$name=$_SESSION['username'];
mysqli_query($conn,"insert into tb_pinglun (name,shijian,nr,cpid) values ('$name','$time','$pl','$id') ");
echo "<script>alert('评论发表成功!');history.back();</script>";

}
?>