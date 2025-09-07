<?php
function voting() {
 $a = $_GET["age1"];
 if ($a >= 18) {
 echo "Eligible for voting";
 } else {
 echo "Not Eligible for voting";
 }
}
voting();
?>
