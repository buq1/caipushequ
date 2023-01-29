<?php 
	include('../conn/conn.php');
?>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../css/table.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>


	<div id="左侧菜单" class="menu_body">
    	<div class="vtitle"><em class="v"></em>个人信息管理</div>
		<div class="vcon">
			<ul class="vconlist">
				<li><a href="pi.php" target="rightFrame">个人信息</a></li>
			</ul>
		</div>
		<div class="vtitle"><em class="v"></em>普通用户管理</div>
		<div class="vcon" style="display: none;">
			<ul class="vconlist">
			<li><a href="user_lst.php" target="rightFrame">用户列表</a></li>
            <li><a href="user_add.php" target="rightFrame">添加用户</a></li>
			</ul>
		</div>
		<div class="vtitle"><em class="v"></em>分类菜谱管理</div>
		<div class="vcon" style="display: none;">
			<ul class="vconlist">
				<li><a href="zc.php" target="rightFrame">早餐</a></li>
				<li><a href="wc.php" target="rightFrame">午餐</a></li>
				<li><a href="wcan.php" target="rightFrame">晚餐</a></li>
            	<li><a href="tp.php" target="rightFrame">甜品小食</a></li>
			</ul>
		</div>
		<div class="vtitle"><em class="v"></em>菜谱管理</div>
		<div class="vcon" style="display: none;">
			<ul class="vconlist">
				<li><a href="dscp_lst.php" target="rightFrame">菜谱待审核列表</a></li>
				<li><a href="addcp.php" target="rightFrame">添加菜谱</a></li>
			</ul>
		</div>    

	

<script type="text/javascript">
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
</script>

