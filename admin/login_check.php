<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
$username=$_POST['username'];
$userpwd=$_POST['password'];
$yz=$_POST['code'];
$num=$_POST['num'];
if(strval($yz)!=strval($num)){
  echo "<script>alert('验证码输入错误!');history.go(-1);</script>";
  exit;
 }
class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("../conn/conn.php");
     $sql=mysqli_query($conn,"select * from tb_admin where username='".$this->name."'");
     $info=mysqli_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('不存在此用户！');history.back();</script>";
          echo $username;
          exit;
       }
      else{
          if($info['password']==$this->pwd)
            {  
			   session_start();
	           $_SESSION['username']=$info['username'];
               header("location:gly.php");
               exit;
            }
          else {
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }

      }    
   }
 }

    $obj=new chkinput(trim($username),trim($userpwd));
    $obj->checkinput();
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />