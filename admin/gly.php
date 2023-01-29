<!DOCTYPE html>
<?php 
    session_start();
    error_reporting(0);
    //引入判断是否登录文件
      include('dl.php');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>奇妙菜谱网-管理员主页面</title>
        <link href="../css/main.css" rel="stylesheet" type="text/css" />
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../css/table.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery.js"></script>
        <!-- <script type="text/javascript">
        $(function(){
        	//控制菜单的隐藏展开
        	var tabs_i=0
        	$('.vtitle').click(function(){
        		var _self = $(this);
        		var j = $('.vtitle').index(_self);
        		if( tabs_i == j ) return false; tabs_i = j;
        		$('.vtitle em').each(function(e){
        			if(e==tabs_i){
        				$('em',_self).removeClass('v01').addClass('v02');
        			}else{
        				$(this).removeClass('v02').addClass('v01');
        			}
        		});
        		$('.vcon').slideUp().eq(tabs_i).slideDown();
        	});
        })
        </script> -->
    </head>

    <body>
        <div class="frame">
            <div><?php include("public_top.php"); ?> </div>

            <div id="页面主体" class="body">
                 <?php include_once("public_center.php");?>
            </div>

            <div> <?php include("public_footer.php");?></div>

        </div>
    </body>
</html>
