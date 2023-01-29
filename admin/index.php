<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>奇妙菜谱网·后台登录页面</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/login.css" rel="stylesheet" type="text/css" />
    <script>
        function check() {
            var checkCode=document.getElementById("code").value;
            if(!checkCode){
                alert("验证码不能为空");
                return false;
            }
        }
    </script>
</head>

<body>
<div class="frame">

<div class="top">
	<div class="logo">奇妙菜谱网</div>
</div>

<div class="body">
	<div class="login_window_left">
    	<div class="title"></div>
        <div class="click">
        <form action="login_check.php" method="post">
        	<div style="margin-top:20px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">管理员：</div>
            <div style="margin-top:10px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">
            	<input name="username" type="text" required="required"/>
            </div>
            <div style="margin-top:20px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">密 码：</div>
          <div style="margin-top:10px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">
            	<input name="password" type="password" required="required"/>
            </div> 
            <div style="margin-top:20px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">验证码：</div>
          <div style="margin-top:10px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:235px;">
            	 <input type="text" name="code" id="code" autocomplete="off" tabindex="3"/>
                 <?php
                                       $num=intval(mt_rand(1000,9999));
                                       for($i=0;$i<4;$i++){
                                        echo "<img src=../images/code/".substr(strval($num),$i,1).".gif>";
                                       }
                                    ?>
            </div> 
            <input type="hidden" value="<?php echo $num;?>" name="num">
            <div style="margin-top:20px; margin-left:15px; margin-right:0px; margin-bottom:5px; width:237px;">
            	<input type="submit"  style="background:url(images/click.png); height:26px; cursor:pointer;" onClick="return check()"/>
            </div>       
        </form>
        </div>
    </div>
  <div class="login_window_right">
    	<div style="font-size:26px; margin-left:10px; margin-right:10px; margin-top:5px; border-bottom:1px solid #EF705B; padding-bottom:5px;">网站通告</div>
        <div style="font-size:14px; margin:auto; padding:10px ">&nbsp;&nbsp;&nbsp;&nbsp;欢迎管理员，感谢各位的辛勤付出！</div>
  </div>
</div>

<div class="foot">
	<div style="padding-top:10px; padding-left:20px;">欢迎使用： <strong></strong></div>
</div>

</div>
</body>
</html>