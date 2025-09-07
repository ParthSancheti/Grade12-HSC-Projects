<?php
$units=$_GET["unit"];
if($units < 100){
 $bill = $units*1;
 }
elseif($units > 100 && $units <=200){
 $temp = 100*1;
 $remaining_units = $units - 100;
 $bill = $temp + ($remaining_units *2);
 }
elseif($units > 200 && $units <=300){
 $temp = (100*1)+ (100*2);
 $remaining_units = $units - 200;
 $bill = $temp + ($remaining_units *3);
 }
else{
 $temp = (100*1)+ (100*2)+ (100*3)+250;
 $remaining_units = $units - 300;
 $bill = $temp + ($remaining_units *7);
 }
 $tot=$bill+250;
 echo"Total bill to be paid for Month of OCT". $tot;
?>