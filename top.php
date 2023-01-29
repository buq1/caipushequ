 <?php
header( "Content-type: text/html; charset=utf-8" );
 ?>
  <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
   <link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
   <link href="css/1.css" type="text/css" rel="stylesheet">
       <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<script>
var t1=false;
function showDiv(){
document.getElementById("div1").style.display='block';
document.getElementById("div2").style.display='block';
};
function closeDiv(){
document.getElementById("div1").style.display='none';
document.getElementById("div2").style.display='none';
};
function dl(){
if(t1){
closeDiv();
}else{
showDiv();
}
t1=!t1;
};
                             function chkuserinput(form){
                               if(form.username.value==""){
                                  alert("请输入用户名!");
                                  form.username.select();
                                  return(false);
                                }       
                                if(form.userpwd.value==""){
                                  alert("请输入用户密码!");
                                  form.userpwd.select();
                                  return(false);
                                }   
                                if(form.yz.value==""){
                                  alert("请输入验证码!");
                                  form.yz.select();
                                  return(false);
                                }   
                               return(true);                 
                             }
                          </script>
                                  <script language="javascript">
                            function openfindpwd(){
                           // window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
                           alert('请寻求管理员帮助');
                               }
                               function denlu(){
                                var un='<%=session.getAttribute("username")%>';
                                if (un=="") {
                                  alert("请先登录");
                                  showDiv();
                                }else{
                                  window.location.href="PI.php";
                                }

                               }
</script>

<div id="div1" style="z-index: 998;width: 100%;height: 1500px;background: rgba(229,229,229,0.26);position: absolute;display:none;" onclick="dl()"></div>
<div id="div2" class="yuanjiao" style="z-index: 999;position: absolute;margin-top: 15%;margin-left: 30%;width: 600px;height: 350px;background-color: white;display:none;box-shadow: black 5px 5px 10px 5px; ">
 <p style="margin-top:5px;margin-left: 580px;font-size: 15px;cursor: pointer;"><i onclick="dl()" class="fa fa-times" aria-hidden="true"></i></p>
 <p style="font-size: 26px;font-weight:bold;color: blue;margin:0 auto;text-align: center;">用户登录</p>
  <table style="width: 300px;height: auto;margin-left:190px;margin-top: 40px;"> 
  <form name="form2" method="post" action="chkuser.php" onSubmit="return chkuserinput(this)">
                                    <tr>
                                      <td width="50" height="20">用户：</td>
                                      <td height="20" colspan="2">
                                          <input type="text" name="username" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </td>
                                    </tr>
                                    <tr>
                                    <td>&nbsp;
                                    </td>
                                    </tr>
                                    <tr>
                                      <td height="20">密码：</td>
                                      <td colspan="2">
                                          <input type="password" name="userpwd" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </td>
                                    </tr>
                                     <tr>
                                    <td>&nbsp;
                                    </td>
                                    </tr>
                                    <tr>
                                      <td height="20">验证：</td>
                                      <td colspan="2" height="20">
                                          <input type="text" name="yz" size="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                    
                                       &nbsp;
                                              <?php
                                       $num=intval(mt_rand(1000,9999));
                                       for($i=0;$i<4;$i++){
                                        echo "<img src=images/code/".substr(strval($num),$i,1).".gif>";
                                       }
                                    ?>
                                      </td>
                                    </tr>
                                     <tr>
                                    <td>&nbsp;
                                    </td>
                                    </tr>
                                    <tr>
                                      <td height="20" colspan="3">                                       
                                          <input type="hidden" value="<?php echo $num;?>" name="num">
                                          <input name="submit" type="submit" class="buttoncss" value="提 交">
<a href="agreereg.php">注册</a>&nbsp;<a href="javascript:openfindpwd()">找回密码</a>&nbsp;</td>
                                    </tr>
                                  </form>
                                 </table>
</div>
<div style="width: 100%;height: 26px;background-color: black;">
<span style="float: right;">
      <?php
      if(isset($_SESSION['username']) && $_SESSION['username']!=""){
        echo "<a style='color:red;cursor:pointer;'>"."当前用户:".$_SESSION['username']."</a>";
      }else{
        echo '<a onclick="dl()" style="cursor:pointer;">登录</a>';
      }
    ?>
/
      <?php
      if(isset($_SESSION['username']) && $_SESSION['username']!=""){
        echo "<a href='logout.php' style='cursor:pointer;'>注销离开</a>";
      }else{
        echo '<a href="agreereg.php" style="cursor:pointer;">注册</a>';
      }
    ?>
</span>
    <span style="float: right;line-height: 26px;margin-right: 20px;"><span style="color: powderblue"><i class="fa fa-envelope" aria-hidden="true"></i>站长邮箱：*******@126.com</span>
    &nbsp;&nbsp;<span style="color: #9a9c00"><i class="fa fa-phone" aria-hidden="true"></i>站长电话：133*******</span>
        &nbsp;&nbsp;<i class="fa fa-weibo" style="color: red"></i> &nbsp;&nbsp;<i class="fa fa-weixin" style="color: #01c482"></i>&nbsp;&nbsp;
    </span>

</div>
<div class="row" style="background-color: white">
<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">切换导航</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">奇妙菜谱网</a>
   </div>
   <div class="collapse navbar-collapse " id="example-navbar-collapse">
      <ul class="nav navbar-nav">
         <li class="active"><a href="index.php">首页</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               一日三餐<b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               
               <li><a href="zaocang.php">营养早餐</a></li>
               <li class="divider"></li>
               <li><a href="wucan.php">美味午餐</a></li>
               <li class="divider"></li>
               <li><a href="wancan.php">丰盛晚餐</a></li>
            </ul>
            <li><a href="tpxx.php">甜品小食</a></li>
            <li><a href="javascript:denlu()">个人信息</a></li>
         </li>
      </ul>
      <form class="navbar-form navbar-right" role="search" name="form" method="post" action="findcp.php">
<div class="form-group">

<input style="width: 200px;" type="text" name="search" placeholder="搜索菜谱、食材">&nbsp;&nbsp;
<input type="submit" name="submit" class="btn btn-default" value="搜索"> 

</div>
      </form>
      
   </div>
</nav>

</div>