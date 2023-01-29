<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
?>
<link href="../css/1.css" rel="stylesheet" type="text/css" />
<div style="height: 680px;overflow-y: auto;">
<div style="width: 100%;height: 20">
<table width="550" height="20" border="0" align="left" cellpadding="0" cellspacing="5">
<tr>
<form name="form1" method="post" action=""><td><div align="right" style="cursor: pointer;"><input type="hidden" name="zt" value="0"><input type="submit" name="submit1" value="待审核菜谱" class="inputcss"></div></td></form>
<form name="form2" method="post" action=""><td><div align="center" style="cursor: pointer;"><input type="hidden" name="zt" value="1"><input type="submit" name="submit2" value="已审核菜谱" class="inputcss"></div></td></form>
<form name="form3" method="post" action=""><td><div align="left" style="cursor: pointer;"><input type="hidden" name="zt" value="2"><input type="submit" name="submit3" value="已冻结菜谱" class="inputcss"></div></td></form>
</tr>
<tr></tr>
</table>
</div>
<table width="550" height="auto" border="0" align="left" cellpadding="0" cellspacing="5">
<?php 
$zt=isset($_POST['zt'])?$_POST['zt']:"";
if($zt==0){
	$sql=mysqli_query($conn,"select * from tb_caipu where sh=1 order by id");
	$info=mysqli_fetch_array($sql);
	do{
		echo "<tr>";
       echo "
<td width='100px;' height='120px;'><div style='width:100%;height:20px;text-align:center;line-height:20px;color:pink'>RN：".$info[0]."</div><div style='width:100px;height:100px;'><img src='show.php?id=".$info[0]."&sz=1' style='width:100%;height:100%'/></div></td>
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
<td><a href='shcp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='right' style='width:100;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>通过审核</div></a></td>
<td><a href='shcp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='left' style='width:100;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>退回菜谱</div></a></td>
</tr>";
	}while($info=mysqli_fetch_array($sql));
}else if($zt==1){
$sql=mysqli_query($conn,"select * from tb_caipu where sh=0 order by id desc");
	$info=mysqli_fetch_array($sql);
	if ($info==false) {
		echo "<tr><td><h2 style='color:pink'>暂无已审核菜谱</h2></td></tr>";
	}
	do{
		echo "<tr>";
       echo "
<td width='100px;' height='120px;'><div style='width:100%;height:20px;text-align:center;line-height:20px;color:pink'>RN：".$info[0]."</div><div style='width:100px;height:100px;'><img src='show.php?id=".$info[0]."&sz=1' style='width:100%;height:100%'/></div></td>
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
echo "</td>
<td width='275' height='40'><a href='sccp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='center' style='width:100;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>删除</div></a></td>
</tr>";
	}while($info=mysqli_fetch_array($sql));

}else{
$sql=mysqli_query($conn,"select * from tb_caipu where dj=1 order by id");
	$info=mysqli_fetch_array($sql);
	do{
		echo "<tr>";
       echo "
<td width='100px;' height='120px;'><div style='width:100%;height:20px;text-align:center;line-height:20px;color:pink'>RN：".$info[0]."</div><div style='width:100px;height:100px;'><img src='show.php?id=".$info[0]."&sz=1' style='width:100%;height:100%'/></div></td>
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
echo "</td>
<td width='275' height='40'><a href='sccp.php?cpid=".$info[0]."' style='width:100%;height:40px;background-color:red;color:white;text-align:center;line-height:40px;text-decoration:none'><div align='center' style='width:100;height:40px;background-color:red;color:white;text-align:center;line-height:40px;'>删除</div></a></td>
</tr>";
	}while($info=mysqli_fetch_array($sql));

}

?>
</table>
</div>