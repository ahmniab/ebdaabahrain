<?php
function counter($numbers) 
{ 

// <b> 
$numbers=str_replace("0","<img src='images/counter/0.gif' />",$numbers); 
$numbers=str_replace("1","<img src='images/counter/1.gif' />",$numbers); 
$numbers=str_replace("2","<img src='images/counter/2.gif' />",$numbers); 
$numbers=str_replace("3","<img src='images/counter/3.gif' />",$numbers); 
$numbers=str_replace("4","<img src='images/counter/4.gif' />",$numbers); 
$numbers=str_replace("5","<img src='images/counter/5.gif' />",$numbers); 
$numbers=str_replace("6","<img src='images/counter/6.gif' />",$numbers); 
$numbers=str_replace("7","<img src='images/counter/7.gif' />",$numbers); 
$numbers=str_replace("8","<img src='images/counter/8.gif' />",$numbers);
$numbers=str_replace("9","<img src='images/counter/9.gif' />",$numbers);  

return $numbers; 
} 



?>