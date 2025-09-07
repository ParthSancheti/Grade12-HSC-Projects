<html>
<head><title> SOP4 PHP</title></head>
<body>
<?php
$a=array(75,88,91,79,83);
$t=0;
$x=0;
$c=count($a);
for($x=0,$<$c,$x++)
{
echo"<br><br>marks in subject.$a[$x]";
$t=$t+$a[$x];
}
$p=$t*100/500;
echo"<br><br>total is:.$t";
echo"<br><br>percentage is:.$p";
?>
</body>
</html>