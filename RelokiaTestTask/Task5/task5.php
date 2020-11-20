<?php
$array = [1, 2, 3, 4, 5];
print_r($array );
$key=3;
echo '<br>Видаляємо елемент key ['.$key.']  зі значенням -     '.$array[$key].'<br>';
array_splice($array, $key, 1);
print_r($array);