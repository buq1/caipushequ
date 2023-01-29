<div style="height: 680pd;overflow: auto;">
<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
session_start();
include("../conn/conn.php");

$cpname=$_POST['cpname'];
$cpjs=$_POST['cpjs'];
$yl1=$_POST['yl1'];
$yl2=$_POST['yl2'];
$yl3=$_POST['yl3'];
$yl4=$_POST['yl4'];
$yl5=$_POST['yl5'];
$yl6=$_POST['yl6'];
$yl7=$_POST['yl7'];
$yl8=$_POST['yl8'];
$yl9=$_POST['yl9'];
$yl10=$_POST['yl10'];
//$tp1=$_POST['bz1'];
$bz1=$_POST['bzwz1'];
//$tp2=$_POST['bz2'];
$bz2=$_POST['bzwz2'];
//$tp3=$_POST['bz3'];
$bz3=$_POST['bzwz3'];
//$tp4=$_POST['bz4'];
$bz4=$_POST['bzwz4'];
//$tp5=$_POST['bz5'];
$bz5=$_POST['bzwz5'];
//$tp6=$_POST['bz6'];
$bz6=$_POST['bzwz6'];
//$tp7=$_POST['bz7'];
$bz7=$_POST['bzwz7'];
//$tp8=$_POST['bz8'];
$bz8=$_POST['bzwz8'];
//$tp9=$_POST['bz9'];
$bz9=$_POST['bzwz9'];
//$tp10=$_POST['bz10'];
$bz10=$_POST['bzwz10'];
$name=$_SESSION['username'];
$time=date("YmdHis");
$ping=$_SESSION['username'].$time;
$leibie=$_POST['lb'];


 /**
 * 向数据库中插入图片
 * 编辑：www.jbxue.com
 */

 $imgfile1=$_FILES['imgfile1'];
 $imgfile2=$_FILES['imgfile2'];
  $imgfile3=$_FILES['imgfile3'];
   $imgfile4=$_FILES['imgfile4'];
    $imgfile5=$_FILES['imgfile5'];
     $imgfile6=$_FILES['imgfile6'];
      $imgfile7=$_FILES['imgfile7'];
       $imgfile8=$_FILES['imgfile8'];
        $imgfile9=$_FILES['imgfile9'];
         $imgfile10=$_FILES['imgfile10'];
 $submitbtn=$_POST['submitbtn'];
 if($submitbtn=='OK' and is_array($imgfile1)){
 
 $type1=$imgfile1['type'];
//取得图片类型

 $tmpfile1=$imgfile1['tmp_name']; 
   //图片上传上来到临时文件的路径         
 if($tmpfile1 and is_uploaded_file($tmpfile1)){  //判断上传文件是否为空，文件是不是上传的文件
  //读取图片流
  $imgdata1=mysqli_real_escape_string($conn,file_get_contents($tmpfile1));
 
/*  if(is_array($imgfile2){
    $type2=$imgfile2['type'];
     $tmpfile2=$imgfile2['tmp_name'];
  $imgdata2=mysqli_real_escape_string($conn,file_get_contents($tmpfile2));

}else{
  $type2="";
  $imgdata2="";
}*/
if(!empty($imgfile2['name'])){
  $type2=$imgfile2['type'];
     $tmpfile2=$imgfile2['tmp_name']; 
  $imgdata2=mysqli_real_escape_string($conn,file_get_contents($tmpfile2));
}else{
    $type2="";
  $imgdata2="";
}

if(!empty($imgfile3['name'])){
  $type3=$imgfile3['type'];
     $tmpfile3=$imgfile3['tmp_name']; 
  $imgdata3=mysqli_real_escape_string($conn,file_get_contents($tmpfile3));
}else{
    $type3="";
  $imgdata3="";
}
if(!empty($imgfile4['name'])){
  $type4=$imgfile4['type'];
  $tmpfile4=$imgfile4['tmp_name'];
  $imgdata4=mysqli_real_escape_string($conn,file_get_contents($tmpfile4));
}else{
    $type4="";
  $imgdata4="";
}
if(!empty($imgfile5['name'])){
  $type5=$imgfile5['type'];
  $tmpfile5=$imgfile5['tmp_name']; 
  $imgdata5=mysqli_real_escape_string($conn,file_get_contents($tmpfile5));
}else{
    $type5="";
  $imgdata5="";
}
if(!empty($imgfile6['name'])){
  $type6=$imgfile6['type'];
  $tmpfile6=$imgfile6['tmp_name']; 
  $imgdata6=mysqli_real_escape_string($conn,file_get_contents($tmpfile6));
}else{
    $type6="";
  $imgdata6="";
}
if(!empty($imgfile7['name'])){
  $type7=$imgfile7['type'];
    $tmpfile7=$imgfile7['tmp_name']; 
  $imgdata7=mysqli_real_escape_string($conn,file_get_contents($tmpfile7));
}else{
    $type7="";
  $imgdata7="";
}
if(!empty($imgfile8['name'])){
  $type8=$imgfile8['type'];
  $tmpfile8=$imgfile8['tmp_name']; 
  $imgdata8=mysqli_real_escape_string($conn,file_get_contents($tmpfile8));
}else{
    $type8="";
  $imgdata8="";
}
if(!empty($imgfile9['name'])){
  $type9=$imgfile9['type'];
  $tmpfile9=$imgfile9['tmp_name'];
  $imgdata9=mysqli_real_escape_string($conn,file_get_contents($tmpfile9));
}else{
    $type9="";
  $imgdata9="";
}
if(!empty($imgfile10['name'])){
  $type10=$imgfile10['type'];
  $tmpfile10=$imgfile10['tmp_name']; 
  $imgdata10=mysqli_real_escape_string($conn,file_get_contents($tmpfile10));
}else{
    $type10="";
  $imgdata10="";
}
   //bin2hex()将二进制数据转换成十六进制表示

 
  if(mysqli_query($conn,"INSERT INTO tb_caipu( cpname, author, jianjie, yongliao1, yongliao2, yongliao3, yongliao4, yongliao5, yongliao6, yongliao7, yongliao8, yongliao9, yongliao10, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, buzhou1, buzhou2, buzhou3, buzhou4, buzhou5, buzhou6, buzhou7, buzhou8, buzhou9, buzhou10, tuijian, sh, pingjiaid, dzl, leibie, dj, type1, type2, type3, type4, type5, type6, type7, type8, type9, type10) VALUES ('".$cpname."','".$name."','".$cpjs."','".$yl1."','".$yl2."','".$yl3."','".$yl4."','".$yl5."','".$yl6."','".$yl7."','".$yl8."','".$yl9."','".$yl10."','".$imgdata1."','".$imgdata2."','".$imgdata3."','".$imgdata4."','".$imgdata5."','".$imgdata6."','".$imgdata7."','".$imgdata8."','".$imgdata9."','".$imgdata10."','".$bz1."','".$bz2."','".$bz3."','".$bz4."','".$bz5."','".$bz6."','".$bz7."','".$bz8."','".$bz9."','".$bz10."','1','1','".$ping."','0','".$leibie."','0','".$type1."','".$type2."','".$type3."','".$type4."','".$type5."','".$type6."','".$type7."','".$type8."','".$type9."','".$type10."')")){
   echo "<script>alert('发布成功！');location.href='addcp.php';</script>";
  }
  else{
  echo "<script>alert('插入失败！');</script>";
  echo $type1,$imgdata1."<br><br/><br/>";
  echo $type2,$imgdata2."<br><br><br/><br/>";
  echo $type3,$imgdata3."<br><br><br/><br/>";
  }
 }else
 echo "<script>alert('请选择正确图片！');history.back();</script>";
} else
 echo "<script>alert('步骤1的图片为必需！');history.back();</script>";


   /* $pd=mysqli_query($conn,"insert into tb_caipu (cpname,author,jianjie,yongliao1,yongliao2,yongliao3,yongliao4,yongliao5,yongliao6,yongliao7,yongliao8,yongliao9,yongliao10,image1,image2,image3,image4,image5,image6,image7,image8,image9,image10,buzhou1,buzhou2,buzhou3,buzhou4,buzhou5,buzhou6,buzhou7,buzhou8,buzhou9,buzhou10,pingjiaid,leibie,type1,type2,type3,type4,type5,type6,type7,type8,type9,type10) values ('$cpname','$name','$cpjs','$yl1','$yl2','$yl3','$yl4','$yl5','$yl6','$yl7','$yl8','$yl9','$yl10','$tp1','$tp2','$tp3','$tp4','$tp5','$tp6','$tp7','$tp8','$tp9','$tp10','$bz1','$bz2','$bz3','$bz4','$bz5','$bz6','$bz7','$bz8','$bz9','$bz10','$ping','$leibie','$type1','$type2','$type3','$type4','$type5','$type6','$type7','$type8','$type9','$type10')");*/
/*if($pd){
    echo "<script>alert('恭喜，发布成功!');window.location='caipu_add.php';</script>";
 }else{
  echo "<script>alert('失败了，麻烦核对后重试！');window.location='caipu_add.php';</script>";
 }*/
?>
</div>