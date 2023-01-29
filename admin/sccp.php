<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');


$id=$_GET['cpid'];
mysqli_query($conn,"delete from tb_caipu where id='".$id."'");
echo "<script>alert('恭喜，删除成功!');window.location='dscp_lst.php';</script>";

?>