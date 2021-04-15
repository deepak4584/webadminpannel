<!DOCTYPE html>
<html>
<body>

<?php
$a = '5444_mohass_3434';

$pos = strpos($a,'_');

echo $reststr = substr($a,0,$pos);

echo "<br>";

$sd = substr($a,$pos+1);

$pos2 = strpos($sd,'_');

echo $sbc = substr($sd,0,$pos2);

echo "<br>";


echo $roll = substr($sd,$pos2+1);

?>

</body>
</html>