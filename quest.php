<?php
echo phpinfo();
//echo calc(100);

function calc($n){

$x = array();
$x[] = 0;
$x[] = 1;
$x[] = 1;

for($i=3;$i<$n;$i++){
$x[] = $x[$i-1]+$x[$i-2]+$x[$i-3]-1;

}
$value = $x[$n-1];
$actval = number_format($value,0,'','');
return $actval;
}

?>

