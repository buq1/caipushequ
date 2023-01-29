<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');


$id=$_GET['cpid'];
$sql=mysqli_query($conn,"select dj from tb_caipu where id='".$id."'");
$info=mysqli_fetch_array($sql);
if($info[0]==0){
mysqli_query($conn,"update tb_caipu set dj='1' where id='".$id."'");
echo "<script>history.back();</script>";
exit();
}else{
mysqli_query($conn,"update tb_caipu set dj='0' where id='".$id."'");	
echo "<script>history.back();</script>";
exit();
}

?>