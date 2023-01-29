<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
?>
<script type="text/javascript">
function chkinput(form){
if (form.admin.value=="") {
	alert("账户名不可为空");
	form.admin.select();
	return(false);
}
}
function chkinput1(form){
	if (form.pwd1.value=="") {
			alert("新密码不可为空");
	form.pwd1.select();
	return(false);
	}
		if (form.pwd2.value=="") {
			alert("确认新密码不可为空");
	form.pwd2.select();
	return(false);
	}
if (form.pwd1.value!=form.pwd2.value) {
	alert("新密码两次输入不一致");
	return(false);
}
if (form.pwd.value=="") {
alert("原密码未输入");
form.pwd.select();
	return(false);
}
if (form.pwd.value!=form.mima.value) {
	alert("原密码输入错误");
form.pwd.select();
	return(false);
}
}
</script>
<link rel="stylesheet" type="text/css" href="../css/1.css">
<table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
<?php
$sql=mysqli_query($conn,"select * from tb_admin where username='".$_SESSION['username']."'");
$info=mysqli_fetch_array($sql);
?>

<tr>
   
      <td height="20" bgcolor="#FFEDBF" colspan="2"><div align="center" style="color: #660206"><?php echo $_SESSION['username'];?>的所有信息</div></td>
   </tr>
<form name="form1" method="post" action="savepi.php" onSubmit="return chkinput(this)">
<tr>
   <td>
<div align="right">账户：</div>
   </td>
   <td>
<div align="left"><input type="text" name="admin" size="25" class="inputcssnull" value="<?php echo $info['username'];?>">
<input type="hidden" name="abc" value="zh">
<input type="submit" name="a" value="修改帐户名" class="buttoncss">

</div>
   </td>
   </form>
</tr>
<form name="form1" method="post" action="savepi.php" onSubmit="return chkinput1(this)">
<tr>
   <td>
<div align="right">原密码：</div>
   </td>
   <td>
<div align="left"><input type="text" name="pwd" size="25" class="inputcssnull">
<input type="hidden" name="mima" value="<?php echo $info['password'];?>">
</div>
   </td>
</tr>
<tr>
   <td>
<div align="right">新密码：</div>
   </td>
   <td>
<div align="left"><input type="text" name="pwd1" size="25" class="inputcssnull" ></div>
   </td>
</tr>
<tr>
   <td>
<div align="right">确认新密码：</div>
   </td>
   <td>
<div align="left"><input type="text" name="pwd2" size="25" class="inputcssnull">
<input type="hidden" name="abc" value="mm">
<input type="submit" name="a" value="确认修改密码" class="buttoncss">


</div>
   </td>
</tr>
</form>
</table>
