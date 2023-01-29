
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <link href="css/2.css" type="text/css" rel="stylesheet">
 <div class="dv2">
<script language="JavaScript" type="text/javascript"> 
var marqueeContent=new Array(); 
marqueeContent[0]="<a href=http://xyq.163.com/news/2006/11/2-2-20061102170913.html target=_blank>忘记账号密码，麻烦联系管理员</a>"; 
marqueeContent[1]="<a href=http://ekey.163.com/ target=_blank>禁止发布违反国家法律法规的信息</a>"; 
marqueeContent[2]="<a href=http://xyq.163.com/download/wallpaper.htm target=_blank>新式小食菜谱即将来袭</a>"; 
marqueeContent[3]="<a href=http://xyq.163.com/download/around.htm target=_blank>爱惜账号，严禁黄赌毒</a>"; 
marqueeContent[4]="<a href=http://xyq.163.com/download/around.htm target=_blank>午餐丰盛美味</a>"; 
marqueeContent[5]="<a href=http://xyq.163.com/download/around.htm target=_blank>晚餐低脂健康</a>"; 
marqueeContent[6]="<a href=http://xyq.163.com/download/around.htm target=_blank>新甜品小食快来看看</a>"; 
var marqueeInterval=new Array(); 
var marqueeId=0; 
var marqueeDelay=2000; 
var marqueeHeight=40; 
function initMarquee() { 
    var str=marqueeContent[0]; 
    document.write('<div id="marqueeBox" style="overflow:hidden;width:100%;height:'+marqueeHeight+'px" onmouseover="clearInterval(marqueeInterval[0])" onmouseout="marqueeInterval[0]=setInterval(\'startMarquee()\',marqueeDelay)"><div>'+str+'</div></div>'); 
    marqueeId++; 
    marqueeInterval[0]=setInterval("startMarquee()",marqueeDelay); 
} 
function startMarquee() { 
    var str=marqueeContent[marqueeId]; 
    marqueeId++; 
    if(marqueeId>=marqueeContent.length) marqueeId=0; 
    if(document.getElementById("marqueeBox").childNodes.length==1) { 
    var nextLine=document.createElement('DIV'); 
    nextLine.innerHTML=str; 
    document.getElementById("marqueeBox").appendChild(nextLine); 
    } 
    else { 
        document.getElementById("marqueeBox").childNodes[0].innerHTML=str; 
        document.getElementById("marqueeBox").appendChild(document.getElementById("marqueeBox").childNodes[0]); 
        document.getElementById("marqueeBox").scrollTop=0; 
    } 
    clearInterval(marqueeInterval[1]); 
    marqueeInterval[1]=setInterval("scrollMarquee()",40); 
} 
function scrollMarquee() { 
    document.getElementById("marqueeBox").scrollTop++; 
    if(document.getElementById("marqueeBox").scrollTop%marqueeHeight==(marqueeHeight-1)){ 
    clearInterval(marqueeInterval[1]); 
    } 
} 
initMarquee(); 
</script> 
</div> 
