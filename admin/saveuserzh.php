<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
$id=isset($_GET['id'])?$_GET['id']:"";
$zt=isset($_GET['zt'])?$_GET['zt']:"";
$sql1=mysqli_query($conn,"select * from tb_user where id='".$id."'");
$info1=mysqli_fetch_array($sql1);
if($zt==0){
	if($info1[3]==0){
		$sql=mysqli_query($conn,"update tb_user set dongjie='1' where id='".$id."'");
		echo "<script>location.href='user_lst.php';</script>";
		exit();
	}else if($info1[3]==1){
		$sql=mysqli_query($conn,"update tb_user set dongjie='0' where id='".$id."'");
		echo "<script>location.href='user_lst.php';</script>";
		exit();
	}
	
}else if($zt==1){
$sql=mysqli_query($conn,"delete from tb_user where id='".$id."'");
echo "<script>alert('删除成功！');location.href='user_lst.php';</script>";
exit();
}



?>