<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');

$zt=$_POST['abc'];
if($zt=="zh"){
$name=$_POST['admin'];
$pwd=$_POST['mima1'];
echo $_SESSION['username'];
$sql1="update tb_admin set username='".$name."' where username='".$_SESSION['username']."'";
mysqli_query($conn,$sql1);
if (mysqli_query($conn,$sql1)) {
$_SESSION['username']=$name;
	echo "<script>alert('修改成功！');location.href='pi.php';</script>";
exit();
}else{
	echo "<script>alert('对不起，请重试');history.back();</script>";
}
}else{
	$pwd=$_POST['pwd1'];
$sql1="update tb_admin set password='".$pwd."' where username='".$_SESSION['username']."'";
mysqli_query($conn,$sql1);
if (mysqli_query($conn,$sql1)) {
	session_start();
session_destroy();
	echo "<script>alert('修改成功！请重新登录');</script>";
	header("location:index.php");
exit();
}else{
	echo "<script>alert('对不起，请重试');history.back();</script>";
}
}
?>