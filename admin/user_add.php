<?php
header ( "Content-type: text/html; charset=utf-8" );
include('dl.php');
include('../conn/conn.php');
?>
<table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="5">
<tr>
  <td colspan="2"><div align="center" style="width: 100%;height: 100%;background-color: #FFEDBF;">创建新的普通用户</div></td>
</tr>
<form name="form" method="post" action="" onSubmit="return chkinput(this)">
<tr>
  <td><div align="right">用户名：</div></td><td><div align="left"><input type="text" name="admin"></div></td>
</tr>
<tr>
  <td><div align="right">密码：</div></td><td><div align="left"><input type="text" name="pwd1"></div></td>
</tr>
<tr>
  <td><div align="right">确认密码：</div></td><td><div align="left"><input type="text" name="pwd2"></div></td>
</tr>
<tr>
  <td><div align="right">上传头像：</div></td><td><div align="left"><input type="file" name="touxiang"></div></td>
</tr>
<tr>
  <td><div align="right"><input type="submit" name="submit" value="提交"></div></td><td><div align="left"><input type="reset" name="cx" value="重写"></div></td>
</tr>
</form>
</table>
<script type="text/javascript">
function chkinput(form){
if (form.admin.value=="") {
	alert("账户名不可为空");
	form.admin.select();
	return(false);
}
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
}
</script>
<?php
$submit=isset($_POST['admin'])?true:false;
if($submit){
$name=$_POST['admin'];
$pwd=$_POST['pwd1'];
$regtime=date("Y-m-j");
$sql=mysqli_query($conn,"select * from tb_user where name='".$name."'");
$info=mysqli_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('该用户已经存在!');location.href='user_add.php'</script>";
   exit();
 }
 else
 {  
    mysqli_query($conn,"insert into tb_user(name,pwd,regtime) values ('$name','$pwd','$regtime')");
    echo "<script>alert('恭喜，注册成功!');location.href='user_add.php'</script>";
    die;
 }
}
?>