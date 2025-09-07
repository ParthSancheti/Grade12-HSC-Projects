<?php
$v = $_POST["t1"];
$c = 0;
for ($i = 0; $i < strlen($v); $i++) {
 $ch = strtolower($v[$i]);
 if ($ch=='a' || $ch=='e' || $ch=='i' || $ch=='o' || $ch=='u') {
 $c++;
 }
}
echo "Number of vowels: " . $c;
?>
