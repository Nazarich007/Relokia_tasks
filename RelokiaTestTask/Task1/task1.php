<?php
$string ='string';
$array = str_split($string);
//print_r($array);
//echo count($array);
for ($x=count($array); $x>=0; $x--) {
    echo $array[$x];
}
