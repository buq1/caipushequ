<html>
<link href="../css/1.css" type="text/css" rel="stylesheet">
<head>
  <title>上传图片</title>
</head>

<body>
<form method="post" action="addcaipu.php" enctype="multipart/form-data">
<table align="center" cellpadding="0" cellspacing="0">
<tr>
<td colspan="4"><p style="color: red;text-align:center;">菜谱发布限制用料与步骤在10个以内</p>
</td>
<tr>
<tr>
<td width="50">
</td>
<td><div align="right">菜谱名：</div>
</td>
<td><input type="text" name="cpname">
</td>
<td width="50">
</td>
</tr>
<tr>
<td width="50">

</td>
<td><div align="right">菜谱类别：</div>
</td>
<td>
   <select name="lb">
   <option value="早餐">早餐</option>
   <option value="午餐" selected="selected">午餐</option>
   <option value="晚餐">晚餐</option>
   <option value="小食">小食</option>
   </select>
</td>
<td width="50">

</td>
</tr>
<tr>
<td width="50"></td>
<td>
<div align="right">用料：</div>
</td>
<td>
<input type="text" name="yl1" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl2" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl3" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl4" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl5" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl6" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl7" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl8" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl9" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl10" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
</td>
<td width="50"></td>
</tr>
<tr>
<td width="50"></td>
<td><div align="right">菜谱介绍：</div></td>
<td height="60"><input type="text" name="cpjs"></td>
<td width="50"></td>
</tr>
<?php
 for($i=1;$i<=10;$i++){
?>
<tr>
<td width="50"></td>
<td height="60"><div align="right">步骤<?php echo $i;?>:</div>
</td>
<td>

<input type="file" name="imgfile<?php echo $i;?>" />
</td>
<td width="50"></td>
</tr>
<tr>
<td width="50"></td>
<td></td>
<td>
<input type="text" name="bzwz<?php echo $i;?>" placeholder="步骤<?php echo $i;?>详细内容">
</td>
<td width="50"></td>
</tr>
<?php
}
?>









<tr>
<td width="50">
</td>
<td height="60">
 
 <input type="hidden" value="204800" name="MAX_FILE_SIZE"/>
 <input type="submit" value="OK" name="submitbtn" style="width:100px;height:23px"/>
 </td>
 <td>
 </td>
 <td width="50">
 </td>
</table>
</form>
</body>
</html>