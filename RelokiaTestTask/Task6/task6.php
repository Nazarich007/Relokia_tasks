<?php
$array = [1, 2, 3, 4, -5, 6, 7, -8, 9, -10];
echo 'Розмір до запису - '.count($array).'<br>';
print_r($array);
for ($x=0; $x<=count($array); $x++) {
    if($array[$x]<0){
    array_splice($array,$x+1, 0, 0);
    }else $array[$x];
}
echo '<br>Розмір після запису - '.count($array).'<br>';
print_r($array);
echo '<br>';