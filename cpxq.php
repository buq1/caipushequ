<script src="js/jquery-1.10.2.min.js"></script>
 <script>
        $(document).ready(function(){
            $(".c1").click(function(){
                $(".c2").slideToggle("slow");
            });
           
        });
    </script>

<?php
session_start();
include("conn/conn.php");
include("top.php");
?>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10 dv1">
<div class="bj1"  >
<?php 
$sql=mysqli_query($conn,"select * from tb_caipu where pingjiaid=".$_GET['cpid']."");
$info=mysqli_fetch_array($sql);
 ?>
<p style="margin-left:10px;line-height: 30px;"><i style="color: orange;" class="fa fa-window-maximize" aria-hidden="true"></i>&nbsp;<font style="color: brown;font-weight: bold;">菜谱详情</font></p>
</div>
<div class="row">
<div class="col-md-9" style="padding-bottom: 40px;">
<div style="text-align: center;"><h1><?php echo $info[1]; ?></h1>
<p style="text-align: center;"><span style="color: pink;">作者：<?php echo $info[2];?></span></p>
</div>
<div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 20px;">
<span style="font-weight: bold;">菜谱介绍：</span>
<?php echo $info[3];?>
</div>
<div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 20px;overflow:hidden;">
<span style="font-weight: bold;">用料：</span>
<?php 
  for($i=4;$i<=13;$i++){
     if ($info[$i]=="") {
     	
     }else{
     	if($i==4){
     	echo "<span style='margin-left:10px;'>".$info[$i].";</span><br>";  
     }else{
     	echo "<span style='margin-left:25px;'>".$info[$i].";</span><br>";
     }
     }
  }
?>
</div>
<?php 
 for($j=1;$j<=10;$j++){
if($info['buzhou'.$j]=="") break;
 ?>
 <div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 20px;">
<span style="font-weight: bold;">步骤<?php echo $j;?>：</span>
<div style="width:100%;height: 450px;background-color: pink;overflow: hidden;">
<?php
if($info['image'.$j]==""){
	echo "<p style='font-size:200px;text-align:center;color:white;'>暂无图片</p>";
}else{
	echo "<img src='show.php?id=".$info[0]."&sz=".$j."' style='width:100%;height:450px;'/>";
}
?>
</div>
<div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 20px;">

<?php
 echo "&nbsp;".$info['buzhou'.$j];
?>
</div>
</div>
 <?php	
 }
 $id=$info[36];

 ?>
<div class="yuanjiao" style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 20px;">
<span style="float: right;margin-right: 20px;"><i style="color: red;" class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp;<?php echo $info[37]; ?></span>
</div>
<div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 50px;height: 2px; background-color: yellow;"></div>
<div style="width: 85%;margin:0 auto;font-size: 20px;margin-top: 100px;max-height: 600px;">
<div class="dv1" style="width: 100%;font-weight: bold;background-color: black;color: white;height: 30px;"><h3>&nbsp;菜谱讨论区</h3></div>
<div style="max-height:570px;width:100%;border:1px solid black;">
<?php
 $cad=mysqli_query($conn,"select * from tb_pinglun where cpid=".$id."");
$pj=mysqli_fetch_array($cad);
?>
<div style="height: auto;max-height: 520px;overflow-y: auto;">
<?php 
if($pj==false){
	echo "<p style='text-align:center;color:pink;'>本菜谱还没有人留言，快来抢楼吧</p>";
}
do{
	?>
<div style="margin:0 auto;height: auto;width: 95%;margin-top: 6px;border: 1px solid pink;padding:6px;">
<p style="margin-left:5px;"><span style="font-weight: bold;"><?php echo $pj[1];?></span><span style="margin-left: 15px;color: pink;"><?php echo $pj[2];?></span></p>
<div style="width: 95%;">&nbsp;<?php echo $pj[3]?>
</div>
</div>
	<?php
}while ($pj=mysqli_fetch_array($cad)) 
 ?>


</div>
<div style="height: 45px;border-top: 1px solid pink;margin-top: 5px;">
<form name="form2" method="post" action="savepl.php?cpid=<?php echo $info['pingjiaid'];?>">
<input style="width: 80%;margin-top:8px;margin-left: 4px;color: pink;" type="text" name="pl" placeholder="说点什么吧">&nbsp;&nbsp;<button type="submit" class="btn btn-default" style="margin-top: -8px;">发布</button>
</form>
</div>
</div>


</div>
</div>
<div class="col-md-3">
<div class="dv1" style="margin-top: 10px;height: auto;width: 95%;max-height: 1500px; ">
<div style="background-color: pink;color: white;font-weight: bold;"><font style="margin-left: 10px;">作品分享</font></div>

<?php 
$bad=mysqli_query($conn,"select * from tb_pingjia where cpid=".$id."");
$pl=mysqli_fetch_array($bad);
if($pl==false){
  echo "<div style='width:100%;text-align:center;color:pink;'>还没有人分享作品</div>";
}
?>
<div style="overflow-y: auto;max-height: 1460px;">
<?php 
do{
?>
<div style="min-height: 50px;border: 1px solid yellow;border-radius: 10px;margin: 20px;">
<div style="height: 26px;margin-left:10px;font-weight: bold;font-size: 24px;"><?php echo $pl[1].":";?></div>
<div style="width: :100%;height: 120px;">
<img src='<?php echo $pl[5];?>' style="width: 100%;height: 120px;">
</div>
<div style="width: 100%">&nbsp;<?php echo $pl[2];?></div>
<span style="float: right;color: pink;"><?php echo $pl[3];?></span>
</div>
<?php
}while ($pl=mysqli_fetch_array($bad)) 
 ?>
 </div>
<div style="width: 100%;height: 30px;">
<div class="c1"><button class="buttoncss" style="width: 100%;height: 30px;">点此分享自己的这道菜</button></div></div>
<div class="c2" style="width:100$; height:250px; background-color:white; margin:auto; display:none">
<form name="form2" method="post" action="iframel.php?cpid=<?php echo $info['pingjiaid'];?>">
<p style="margin-left:10%">文字分享：<input style="width: 60%;margin-top:40px;margin-left: 20px;color: pink;" type="text" name="fx" placeholder="说点什么吧"></p>
<p style="margin-left:10%">图片分享：<input style="width: 60%;margin-top:40px;margin-left: 20px;color: pink;" type="file" name="tp"  /></p>

<p style=" margin-top:40px; text-align:center"><button type="submit" class="btn btn-default">分享</button><button style="margin-left:20%">返回首页</button></p>
</form>
</div>
</div>

</div>

</div>
<div class="col-md-1"></div>
</div>