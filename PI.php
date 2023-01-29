
<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
 session_start();
 if(!isset($_SESSION['username']))
 {
   echo "<script>alert('您还没有登录,请先登录!');history.back();</script>";
   exit;
  }
?>
<?php
 include("top.php");
  include("conn/conn.php");
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
   <link href="css/1.css" type="text/css" rel="stylesheet">
       <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
       <script type="text/javascript">
var t2=false;
function showDiv1(){
document.getElementById("div3").style.display='block';
document.getElementById("div4").style.display='block';
};
function closeDiv1(){
document.getElementById("div3").style.display='none';
document.getElementById("div4").style.display='block';
};
function cj(){
if(t2){
closeDiv1();
}else{
showDiv1();
}
t2=!t2;
};
       </script>
 <div class="row">
 <div id="div4" style="z-index: 998;width: 100%;height: 1500px;background: rgba(229,229,229,0.26);position: absolute;display:none;" onclick="cj()"></div>
 <div id="div3" class="yuanjiao" style="z-index: 999;position: absolute;margin-top: 1%;margin-left: 33%;width: 650px;height: 750px;background-color: white;box-shadow: black 5px 5px 10px 5px;display: none;overflow-y: auto; ">

<div style="margin-top: 10px;margin:0 auto;width: 99%;padding-bottom: 30px;">
<form method="post" action="savecp.php" enctype="multipart/form-data">
<table align="center" cellpadding="0" cellspacing="0">
<tr>
<td colspan="4"><p style="color: red;text-align:center;">菜谱发布限制用料与步骤在10个以内</p>
</td>
<tr>
<tr>
<td width="50">
</td>
<td><div align="right">菜谱名：</div>
</td>
<td><input type="text" name="cpname">
</td>
<td width="50">
</td>
</tr>
<tr>
<td width="50">

</td>
<td><div align="right">菜谱类别：</div>
</td>
<td>
   <select name="lb">
   <option value="早餐">早餐</option>
   <option value="午餐" selected="selected">午餐</option>
   <option value="晚餐">晚餐</option>
   <option value="小食">小食</option>
   </select>
</td>
<td width="50">

</td>
</tr>
<tr>
<td width="50"></td>
<td>
<div align="right">用料：</div>
</td>
<td>
<input type="text" name="yl1" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl2" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl3" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl4" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl5" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl6" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl7" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl8" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl9" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">、
<input type="text" name="yl10" size="6" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
</td>
<td width="50"></td>
</tr>
<tr>
<td width="50"></td>
<td><div align="right">菜谱介绍：</div></td>
<td height="60"><input type="text" name="cpjs"></td>
<td width="50"></td>
</tr>
<?php
 for($i=1;$i<=10;$i++){
?>
<tr>
<td width="50"></td>
<td height="60"><div align="right">步骤<?php echo $i;?>:</div>
</td>
<td>

<input type="file" name="imgfile<?php echo $i;?>" />
</td>
<td width="50"></td>
</tr>
<tr>
<td width="50"></td>
<td></td>
<td>
<input type="text" name="bzwz<?php echo $i;?>" placeholder="步骤<?php echo $i;?>详细内容">
</td>
<td width="50"></td>
</tr>
<?php
}
?>









<tr>
<td width="50">
</td>
<td height="60">
 
 <input type="hidden" value="204800" name="MAX_FILE_SIZE"/>
 <input type="submit" value="OK" name="submitbtn" style="width:100px;height:23px"/>
 </td>
 <td>
 <input type="reset" name="quxiao" value="重写" style="width:100px;height:23px">
 </td>
 <td width="50">
 </td>
</table>
</form>
</div>


 </div>
 <div class="col-md-1"></div>
 <div class="col-md-10 dv1" style="padding-bottom: 30px; ">
 <div class="bj1"  >
<p style="margin-left:10px;line-height: 30px;"><i style="color: orange;" class="fa fa-window-maximize" aria-hidden="true"></i>&nbsp;<font style="color: brown;font-weight: bold;">个人信息</font></p>
</div>
  <?php
       $sql=mysqli_query($conn,"select * from tb_user where name='".$_SESSION['username']."'");
       $info=mysqli_fetch_array($sql);
       if($info==false){
        echo "<div style='width:100%;height:150px;font-size:100px;line-height:150px;text-align:center;'>请先登录</div>";
       }else{
       ?>
<div style="width: 100%" class="row">
<div class="col-md-4">
<div style="margin:0 auto;width: 100px;height: 100px;background-color: pink;margin-top: 15px;line-height: 100px;text-align: center;">
 <?php
            if(trim($info['touxiang']=="")){
            echo "暂无头像";
          }
          ?>
          </div>
</div>
<div class="col-md-7">
<div class="row">
<div class="col-md-6" style="margin-left:20px;">
<p style="width: 100%;font-size: 30px;font-weight: bold;margin-top: 15px;"><?php echo $info['name'];?></p>
<p style="color: pink;">UID:<?php echo $info['id'];?></p>
<p  style="color: pink;"><span>粉丝数：<?php echo $info['fss']?></span><span style="margin-left: 10px;">点赞量：<?php echo $info['dzl']?></span><span style="margin-left: 10px;">入站时间：<?php echo $info['regtime']?></span></p>
</div>
<div class="col-md-6"></div>
</div>
<?php 
}
?>
</div>
<div class="col-md-1">
<button style="margin-left: 20px;" class="buttoncss">修改密码</button>
</div>
</div>
<div style="width: 95%;margin:0 auto;height: 2px;background-color: yellow;margin-top: 20px;"></div>

<div class="row" style="padding: 20px;">
<!--  -->
<?php 
       $sql=mysqli_query($conn,"select * from tb_caipu where author='".$_SESSION['username']."'");
       while($myrow=mysqli_fetch_array($sql)) {
        ?>
        <div class="col-md-6">
        <a href="cpxq.php?cpid=<?php echo $myrow[36];?>">
        <div style="width: 98%;height:65px;margin:0 auto;margin-top: 5px;border-radius: 5px;border: 1px solid black;">
        <div style="width: 45px; height: 45px;background-color: pink;float: left;margin-top: 5px;margin-left:5px;">
        <?php 
        if($myrow[14]==""){ 
          echo "暂无图片";
          }else{

            echo "<img src='show.php?id=".$myrow[0]."&sz=1' style='width:45px; height:45px;'/>";
            }
            ?>
            </div>
            <div style="float: left;">
<p style="font-weight: bold;margin-left: 5px;"><?php echo $myrow[1];?></p>
<p style="margin-left: 5px;color: pink"> <span><?php 
                 echo substr($myrow[3],0,24);
                  if(strlen($myrow[3])>24){
                  echo "...";
                  } 
                 ?></span>
<span style="margin-left: 15px;">点赞量：<?php echo $myrow[37];?></span>
<?php 
if($myrow[35]==0&&$myrow[39]==1){
echo "<span style='margin-left:10px;color:red;'>本菜谱已被冻结，有疑问请联系管理员</span>";
}elseif($myrow[35]==1&&$myrow[39]==0){
  echo "<span style='margin-left:10px;color:red;'>本菜谱待管理员审核通过</span>";
}
?>
                 </p>
</div>
 </a>
<div style="width: 50px;height: 100%;float: right;background-color: red;">
<a href="xgcp.php?cpid=<?php echo $myrow[36];?>"><div style="width: 50px;height: 50%;color: white;text-align: center;line-height: 32px;border-bottom: 1px solid white; ">修改</div></a>
<a href="dlcp.php?cpid=<?php echo $myrow[36];?>"><div style="width: 50px;height: 50%;color: white;text-align: center;line-height: 32px;">删除</div></a>
</div>
            </div>
           
        </div>
<?php 
}
 ?>

<!--  -->
</div>

<div style="width: 100px;height: 100px;margin:0 auto;border-radius: 50px;background-color: red; color: white;text-align: center;font-size: 80px;font-weight: bold;cursor: pointer;" onclick="cj()"><i style="margin-top: 15px;" class="fa fa-plus" aria-hidden="true"></i></div>

</div>
<div class="col-md-1"></div>
