<?php
session_start();
include("conn/conn.php");
include("top.php");
$id=$_GET['cpid'];
$sql=mysqli_query($conn,"select * from tb_caipu where pingjiaid=".$id."");
$info=mysqli_fetch_array($sql);
?>








<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div style="margin:0 auto;margin-top: 5px;text-align: center;"><p style="color: red">*系统限制：用料、图片、步骤上限各10个*</p></div>
<div style="margin-top: 10px;margin:0 auto;width: 99%;padding-bottom: 30px;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form2" method="post" action="savecp.php" onSubmit="return chkcp(this)">
<tr>
   <td width="150px" height="20px"></td>
   <td width="443px" height="20px"></td>
   <td width="50px" height="20px"></td>
</tr>
<tr>
   <td width="150px" height="20px"><div style="float: right;">菜谱名：</div></td>
   <td width="443px" height="20px">
   <input type="text" name="cpname" value="<?php echo $info[1];?>" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"><span style="color: red;line-height: 20px;">*</span></td>
   <td width="50px" height="20px"></td>
</tr>
<tr>
<td height=10px;></td>
</tr>
<tr>
  <td width="150px" height="20px"><div style="float: right;">类别：</div></td>
   <td>
   <select name="lb">
   <option value="早餐" <?php if($info[38]=="早餐") echo "selected='selected'";?>>早餐</option>
   <option value="午餐" <?php if($info[38]=="午餐") echo "selected='selected'";?>>午餐</option>
   <option value="晚餐" <?php if($info[38]=="晚餐") echo "selected='selected'";?>>晚餐</option>
   <option value="小食" <?php if($info[38]=="小食") echo "selected='selected'";?>>小食</option>
   </select><span style="red">*</span>
   </td>
</tr>
<tr>
<td height=10px;></td>
</tr>
<tr>
   <td width="150px" height="20px"><div style="float: right;">菜谱介绍：</div></td>
   <td width="443px" height="20px">
   <input type="text" value="<?php echo $info[3];?>" name="cpjs" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></td>
   <td width="50px" height="20px"></td>
</tr>
<tr>
<td height=10px;></td>
</tr>
<tr>
   <td width="150px" height="20px"><div style="float: right;">用料：</div></td>
   <td width="443px" height="auto">
   <input type="text" name="yl1" size="6" value="<?php echo $info[4];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl2" size="6" value="<?php echo $info[5];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl3" size="6" value="<?php echo $info[6];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl4" size="6" value="<?php echo $info[7];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl5" size="6" value="<?php echo $info[8];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl6" size="6" value="<?php echo $info[9];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl7" size="6" value="<?php echo $info[10];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl8" size="6" value="<?php echo $info[11];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl9" size="6" value="<?php echo $info[12];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl10" size="6" value="<?php echo $info[13];?>" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
   </td>
   <td width="50px" height="20px"></td>
</tr>
<tr>
<td height=5px;colspan="3"></td>
</tr>
<tr>
<td height=10px; colspan="3"><div style="width: 100%;height: 1px;background-color: yellow;"></div></td>
</tr>
<?php
  for($i=1;$i<=10;$i++){
?>
<tr>
   <td width="150px" height="20px"><?php echo "<div style='float: right;margin-right:5px;'>步骤".$i.":</div>";?></td>
   <td width="443px" height="auto">
   <p>图片：<input type="text" name=<?php echo "bz".$i;?> size="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></p>
   <p>文字：<input type="text" name=<?php echo "bzwz".$i;?> size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></p>
   </td>
   <td width="50px" height="20px"></td>
</tr>
<tr>
<td height=10px; colspan="3"><div style="width: 100%;height: 1px;background-color: yellow;"></div></td>
</tr>
<?php
}
?>
<tr>
   <td width=150px;height=20px;></td>
   <td width=443px;>                          <input name="submit2" type="submit" class="buttoncss" value="提交">
&nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" value="重写"></form>&nbsp;&nbsp;
   <a href="javascript:history.go(-1);"><button class="buttoncss" >取消</button></a></td>
   <td width=50px;>
   </td>
</tr>

</table>
</div>
</div>
<div class="col-md-2"></div>
</div>