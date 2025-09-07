<html>
<head><title> SOP4 PHP</title></head>
<body>
<?php
    $m1=array("English"=>"55","Hindi"=>"60","Math"=>"70","Marathi"=>"85");
echo "<br> your score is ",$m1['English']. "in English";
echo "<br> your score is ",$m1['Hindi']. "in Hindi";
echo "<br> your score is ",$m1['Math']. "in Math";
echo "<br> your score is ",$m1['Marathi']. "in Marathi";
echo "<br> size of array is ".count($m1);
array_splice($m1,0,1);
echo "<br><br><b>After deleting array is </br>";
foreach($m1 as $x=>$x_value)
{
echo "<br> <br>key=" .$x . ",value=" .$x_value;
echo"<br";
}
?>
</body>
</html>