<?php
include('conn/conn.php');
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
session_start();
include("conn/conn.php");
$name=$_POST['usernc'];

$pwd=$_POST['p1'];

$regtime=date("Y-m-j");
$dongjie=0;
$sql=mysqli_query($conn,"select * from tb_user where name='".$name."'");
$info=mysqli_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('该昵称已经存在!');history.back();</script>";
   exit;
 }
 else
 {  
    mysqli_query($conn,"insert into tb_user(name,pwd,dongjie,regtime) values ('$name','$pwd','$dongjie','$regtime')");
	$username=$name;
	$producelist="";
	$quatity="";
    echo "<script>alert('恭喜，注册成功!');window.location='index.php';</script>";
 }
?>