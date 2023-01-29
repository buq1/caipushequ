 <?php 
include("top.php");

 ?>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
   <link href="css/1.css" type="text/css" rel="stylesheet">
       <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
       <script type="text/javascript">
 function chknc(nc){
	var xmlhttp;
	if(window.ActiveXObject){
		xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
	}else{
		xmlhttp=new XMLHttpRequest();
	}
	xmlhttp.open("GET","chkusernc.php?nc="+nc,true);
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readystate==4 && xmlhttp.status==200){
			var msg=xmlhttp.responseText;
			if(msg==0){
				alert("请输入昵称！");
			}else if(msg==1){
				alert("该昵称已被使用！");
			}else{
				alert("该昵称可以使用！");
			}
		}
	}
	xmlhttp.send(null);
}
       </script>
 <div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-10 dv1">
 <div class="bj1"  >
<p style="margin-left:10px;line-height: 30px;"><i style="color: orange;" class="fa fa-window-maximize" aria-hidden="true"></i>&nbsp;<font style="color: brown;font-weight: bold;">会员注册</font></p>
</div>
<div>
<table width="100%" height="200" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
<tr>
<td width="100" height="20">
</td>
<td>
<div align="center">&nbsp;&nbsp;用户账号:</div>
</td>
<td>
<div align="left">
                          <input type="text" name="usernc" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">&nbsp;*</span>&nbsp;
                          <input name="button2" type="button" class="buttoncss" onclick="chknc(form1.usernc.value)" value="查看昵称是否已用">
                      </div>
</td>
</tr>
<tr>
<td width="100" height="20">
</td>
<td>
<div align="center">&nbsp;&nbsp;注册密码:</div>
</td>
<td>
<div align="left">
                          <input type="password" name="p1" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div>
</td>
</tr>
<tr>
<td width="100" height="20"></td>
<td><div align="center">&nbsp;&nbsp;确认密码:</div>
</td>
<td><div align="left">
                          <input type="password" name="p2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span style="color: #FF0000">*</span></div>
</td>
</tr>
<tr>
<td width="100" height="20">
</td>
<td></td>
<td><div align="left" style="color: #FF0000">注意：带*为必添内容!</div>
</td>
</tr>
<tr>
<td colspan="3">
<div align="center">
                          <input name="submit2" type="submit" class="buttoncss" value="提交">
&nbsp;&nbsp;
                      <input name="reset" type="reset" class="buttoncss" value="重写">
                      </div>
</td>
<tr>
</table>
</form>
</div>

</div>
<div class="col-md-1"></div>
 </div>
 <script type="text/javascript">

function chkinput(form){
	if(form.usernc.value=="")
	{
	 alert("请输入昵称!");
	 form.usernc.select();
	 return(false);
	}
	if(form.p1.value=="")
	{
	 alert("请输入注册密码!");
	 form.p1.select();
	 return(false);
	}
    if(form.p2.value=="")
	{
	 alert("请输入确认密码!");
	 form.p2.select();
	 return(false);
	 }	
	if(form.p1.value.length<6)
	 {
	 alert("注册密码长度应大于6!");
	 form.p1.select();
	 return(false);
	 }	
	if(form.p1.value!=form.p2.value)
	 {
	 alert("密码与重复密码不同!");
	 form.p1.select();
	 return(false);
	 }
	 return (true);
}
 </script>}
