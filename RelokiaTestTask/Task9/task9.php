<?php
function randnumber()
{
    $num = array(rand(0,10), rand(0,10), rand(0,10));
    if (array_sum($num)>= 14){
        print_r($num);
        print_r(array_sum($num));
    } else randnumber();
}
randnumber();