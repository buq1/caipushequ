<?php
session_start();
	require_once("../conn/conn.php"); 
$sql=mysqli_query($conn,"select * from tb_admin where username='".$_SESSION['username']."'");
     $info=mysqli_fetch_array($sql);
if(!$info){
echo "<script language=javascript>alert('请重新登陆！');window.location='index.php'</script>";
	
}
	if($_SESSION["username"]=="")
	{
	   echo "<script language=javascript>alert('请重新登陆！');window.location='index.php'</script>";
	}
?>