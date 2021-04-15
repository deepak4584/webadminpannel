<!DOCTYPE html>
<html>
<body>

<?php

$a = "i love a i lot of  php , i love java too";

$c = strpos($a,",");

$d= substr($a,0,$c);

echo $d;

echo "<br>";

$h = strpos($a,"a");


$f= substr($a,$h+1);
echo $f;

echo "<br>";

$k = substr($a,$c+1);
echo $k;

$m = strstr($a,"i");



echo $m;

echo "<br>";

$q = strlen($a);
echo $q;

echo "<br>";

$l = substr($a,$c+1);
echo $l;


?>
</body>
</html>