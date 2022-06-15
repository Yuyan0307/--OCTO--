<?php $mydate=new DateTime("2022/4/22"); $mydate->format('N');         
echo "<video width='560' height='315' controls autoplay loop muted>"; 
switch($mydate->format('N')){     
case 4:         
echo "<source src='images/movie.mp4' type='video/mp4'>";        
 break;     
 case 5:         
 echo "<source src='images/movie.mp4' type='video/mp4'>";      
 break; } 
 echo "</video>"; 
 ?>