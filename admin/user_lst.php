<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
?>
<style type="text/css">
a:link{ color: white;text-direction: none; }
a:visited{ color: white;text-decoration: none; }
</style>
<?php
$sql=mysqli_query($conn,"select * from tb_user");
$info=mysqli_fetch_array($sql);
?>
<link rel="stylesheet" type="text/css" href="../css/1.css">
<table width="700px"  border="0" align="center" cellpadding="0" cellspacing="5">
<tr>   
      <td height="20" bgcolor="#FFEDBF" colspan="7"><div align="center" style="color: #660206">平台用户表</div></td>
   </tr>
   <tr>
   <td>头像</td>
   <td>用户名</td>
   <td>注册时间</td>
   <td>粉丝量</td>
   <td>点赞量</td>
   <td>UID</td>
   <td></td>
   </tr>
<?php  
do{
	?>
<tr>
    <td width="100px" height="100px"><div align="center" style="width: 100px;height: 100px;"><img src="../<?php echo $info[4];?>" style="width: 100%;height: 100%"></div></td>
    <td width="100px"><div align="center"><?php echo $info[1];?></div></td>
    <td width="100px"><div align="center"><?php echo $info[7];?></div></td>
    <td width="100px"><div align="center"><?php echo $info[6];?></div></td>
    <td width="100px"><div align="center"><?php echo $info[5];?></div></td>
    <td width="100px"><div align="center"><?php echo $info[0];?></div></td>
    <td width="100px"><div style="width: 100%;height: 50px;background-color: red;text-align: center;line-height: 50px;color: white"><a style="cursor: pointer;" href="saveuserzh.php?id=<?php echo $info[0];?>&zt=0">
<?php 
if ($info[3]=="0") {
	echo "冻结账号";
}else{
	echo "取消冻结";
}
?>
  </a>  </div><div style="width: 100%;height: 50px;background-color: red;text-align: center;line-height: 50px;color: white"><a style="cursor: pointer;" href="saveuserzh.php?id=<?php echo $info[0];?>&zt=1">删除</a></div></td>
</tr>
<?php
}while($info=mysqli_fetch_array($sql))
?>




</table>