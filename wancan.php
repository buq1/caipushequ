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
 ?>






<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 dv1">
<div class="bj1">
<p style="margin-left:10px;line-height: 30px;"><i style="color: orange;" class="fa fa-diamond" aria-hidden="true"></i>&nbsp;<font style="color: brown;font-weight: bold;">晚餐低脂健康</font></p>
</div>
<div class="row">
    <?php
    $sql=mysqli_query($conn,"select count(*) as total from tb_caipu where leibie='晚餐' ");
    $info=mysqli_fetch_array($sql);
    $total=$info['total'];
    if($total==0)
    {
        echo "<div style='width:100%;height:40px;text-align:center'>好可惜啊，没有晚餐菜谱可以分享呢!</div>";
    }
    else
    {
    $pagesize=18;
    if ($total<=$pagesize){
        $pagecount=1;
    }
    if(($total%$pagesize)!=0){
        $pagecount=intval($total/$pagesize)+1;

    }else{
        $pagecount=$total/$pagesize;

    }
    if(!isset($_GET['page'])){
        $page=1;

    }else{
        $page=intval($_GET['page']);

    }
    $sql1=mysqli_query($conn,"select * from tb_caipu where leibie='晚餐' order by id desc limit ".($page-1)*$pagesize.",$pagesize ");
    while($info1=mysqli_fetch_array($sql1))
    {
      
    ?>
<div class="col-md-4" style="height: 200px;padding: 20px;overflow: hidden;">
<a href="cpxq.php?cpid=<?php echo $info1['pingjiaid'];?>">
<div style="width: 180px; height: 180px;float: left;">
    <?php
    if($info1['image1']==""){
        echo "<div style='width:100%;height:100%;'>暂无图片</div>";
    }else{
        echo "<img src='".$info1['image1']."' style='width:180px;height:180px;'/>";
    }
    ?>

</div>

    <div style="float: left;height: 180px;margin-left: 5px;">
    <h3><?php echo substr($info1['cpname'],0,18);if(strlen($info1['cpname'])>24){echo "...";}?></h3>
        <?php
        for($i=1;$i<=3;$i++){
            if($info1['yongliao'.$i]==""){

            }else{
                $px=strlen($info1['yongliao'.$i])*6;
            echo "<div style='border:1px solid #d7e2df;width:".$px.";font-size:12px;text-align:center;float:left'>".$info1['yongliao'.$i]."</div>";
            }
        }
        echo "...";
        ?>
        <div style="margin-top: 8px;width: 326px;color:pink;word-wrap: break-word;word-break: break-all;overflow:hidden;">
    <?php
    echo $info1['jianjie'];
    ?>
    </a>
</div>
    </div>

</div>

    <?php
 }
    
    ?>
</div><!--row-->
<div class="row" style="margin-top: 15px;">
<div class="col-md-6" style="height: 30px;text-align: center;line-height: 30px;font-weight: bold;">
本站共有早餐菜谱&nbsp;<?php echo $total;?>&nbsp;篇；每页显示&nbsp;<?php echo $pagesize;?>&nbsp;篇；第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount;?>&nbsp;页
</div>
<div class="col-md-6" style="height: 30px;text-align: center;line-height: 30px;font-weight: bold;">
        <?php
        if($page>=2)
        {
        ?>
        <a href="index.php?page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="index.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
        }
         if($pagecount<=4){
          for($i=1;$i<=$pagecount;$i++){
        ?>
        <a href="index?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
           }
         }else{
         for($i=1;$i<=4;$i++){    
        ?>
        <a href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="index.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="index.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>

</div>
</div>
<?php 
}
 ?>
</div>
<div class="col-md-1"></div>
</div>