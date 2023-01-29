<?php 
session_start();
header( "Content-type: text/html; charset=gb2312" );
?>

<html>
<meta http-equiv="Content-type" content="text/html; charset=gb2312" />
<head>
<title>奇妙菜谱网</title>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/1.css" type="text/css" rel="stylesheet">
	</head>

<body>
<?php 
include("top.php")
 ?>
<?php 
include("zb.php")
 ?>

</body>
</html>
