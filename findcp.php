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
<?php
 include("conn/conn.php");
 include("top.php");
 $name=$_POST['search'];
 $yongliao1=$_POST['search'];
 $sql=mysqli_query($conn,"select * from tb_caipu where cpname like '%".$name."%' or yongliao1 like '%".$yongliao1."%' or yongliao2 like '%".$yongliao1."%'or yongliao3 like '%".$yongliao1."%'or yongliao4 like '%".$yongliao1."%'or yongliao5 like '%".$yongliao1."%'or yongliao6 like '%".$yongliao1."%'or yongliao7 like '%".$yongliao1."%'or yongliao8 like '%".$yongliao1."%'or yongliao9 like '%".$yongliao1."%'or yongliao10 like '%".$yongliao1."%' order by id desc");
 $info=mysqli_fetch_array($sql);
		 if($info==false){
		   echo "<script language='javascript'>alert('本站暂无类似产品!');history.go(-1);</script>";
		  } 
		 else{
		 	?>
<div class="row">
<div class="col-md-4">
<h2 style="float: right;">为您查询到以下结果：</h2>
</div>
<div class="col-md-4">
<h2>&nbsp;</h2>
<?php
do{
?>
<div class="col-md-12" style="height: 200px;padding: 20px;overflow: hidden;">
<a href="cpxq.php?cpid=<?php echo $info['pingjiaid'];?>">
<div style="width: 180px; height: 180px;float: left;">
    <?php
    if($info['image1']==""){
        echo "<div style='width:100%;height:100%;'>暂无图片</div>";
    }else{
        echo "<img src='".$info['image1']."' style='width:180px;height:180px;'/>";
    }
    ?>

</div>

    <div style="float: left;height: 180px;margin-left: 5px;">
    <h3><?php echo substr($info['cpname'],0,18);if(strlen($info['cpname'])>24){echo "...";}?></h3>
        <?php
        for($i=1;$i<=3;$i++){
            if($info['yongliao'.$i]==""){

            }else{
                $px=strlen($info['yongliao'.$i])*6;
            echo "<div style='border:1px solid #d7e2df;width:".$px.";font-size:12px;text-align:center;float:left'>".$info['yongliao'.$i]."</div>";
            }
        }
        echo "...";
        ?>
        <div style="margin-top: 8px;width: 326px;color:pink;word-wrap: break-word;word-break: break-all;overflow:hidden;">
    <?php
    echo $info['jianjie'];
    ?>
    </a>
</div>
    </div>

</div>
<?php
}while ( $info=mysqli_fetch_array($sql));
?>
</div>
<div class="col-md-4">

</div>

</div>


		 	<?php
		 }
?>
