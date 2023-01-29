<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
?>
<link href="../css/1.css" rel="stylesheet" type="text/css" />
<div style="height: 680px;overflow-y: auto;">
<table width="550" height="auto" border="0" align="left" cellpadding="0" cellspacing="5">
<?php 
	$sql=mysqli_query($conn,"select * from tb_caipu where leibie='午餐' and sh='0' order by id");
	$info=mysqli_fetch_array($sql);
	do{
		echo "<tr>";
       echo "
<td width='100px;' height='120px;'><div style='width:100%;height:20px;text-align:center;line-height:20px;color:pink'>RN：".$info[0]."</div><div style='width:100px;height:100px;'><img src='../".$info[14]."' style='width:100%;height:100%'/></div></td>
<td width='450px' height='120px'><div style='width:450px;height:40px;font-weight:bold;'>".$info[1]."</div>
<div style='width:450px;height:80px;'>菜谱介绍：".$info[3];
       echo "</div>
</td></tr>";
echo "<tr>
<td width='275' height='40'>";
if ($info[39]==0) {
	echo "<a href='djcp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='center' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>冻结</div></a>";
}else{
	echo "<a href='djcp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='center' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>解除冻结</div></a>";
}
echo "
</td>
<td width='275' height='40'>
<a href='sccp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='center' style='width:100;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>删除</div></a></td>
</tr>";
	}while($info=mysqli_fetch_array($sql));

	?>

	</table>
	</div>