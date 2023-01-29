<?php 
include("../conn/conn.php");
  $id = isset($_GET['id'])? $_GET['id'] : 0; 
    
    $query = mysqli_query($conn,"select * from tb_caipu where id=".$id.""); 
    $sz=$_GET['sz'];
    $num=mysqli_fetch_assoc($query);
if($num){
 switch ($sz) {
 	case 1:
 		header("content-type:".$num['type1']); 
        echo $num['image1']; 
        exit();
 		break;
 	case 2:
 		 		header("content-type:".$num['type2']); 
        echo $num['image2']; 
        exit();
 		break;
 		case 3:
 			 		header("content-type:".$num['type3']); 
        echo $num['image3']; 
        exit();
 			break;
 			case 4:
 				 		header("content-type:".$num['type4']); 
        echo $num['image4']; 
        exit();
 				break;
 				case 5:
 					 		header("content-type:".$num['type5']); 
        echo $num['image5']; 
        exit();
 					break;
 					case 6:
 						 		header("content-type:".$num['type6']); 
        echo $num['image6']; 
        exit();
 						break;
 						case 7:
 							 		header("content-type:".$num['type7']); 
        echo $num['image7']; 
        exit();
 							break;
 							case 8:
 								 		header("content-type:".$num['type8']); 
        echo $num['image8']; 
        exit();
 								break;
 								case 9:
 									 		header("content-type:".$num['type9']); 
        echo $num['image9']; 
        exit();
 									break;
 									case 10:
 										 		header("content-type:".$num['type10']); 
        echo $num['image10']; 
        exit();
 										break;
 	default:
 		 		header("content-type:".$num['type1']); 
        echo $num['image1']; 
        exit();
 		break;
 }
   
}
       


?>