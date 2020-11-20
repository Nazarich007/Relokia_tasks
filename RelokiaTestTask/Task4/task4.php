<?php
$array = ['h', 'e', 'l', 'l', 'o'];
$arr=array();
for ($x=count($array)-1; $x>=0; $x--) {
    $arr[]=$array[$x];
}
//echo count($arr);
print_r($arr);
