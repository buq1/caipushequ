<?php
header ( "Content-type: text/html; charset=utf-8" ); 
include("conn/conn.php");

$cpid=$_GET['cpid'];
mysqli_query($conn,"delete from tb_caipu where pingjiaid='".$cpid."'");
echo "<script>alert('恭喜，删除成功!');window.location='PI.php';</script>";
?>