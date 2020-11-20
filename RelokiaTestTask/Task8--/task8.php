<?php
$arr=array();
$one = [
    'title'       => 'Test title one',
    'description' => 'Test description one',
    'author'      => 'Igor Kril'
];
$two = [
    'description' => 'Test description two',
    'date'        => '2019-01-01',
    'title'       => 'Test title two',
    'phone'       => '0981111111'
];
$arr=[$one,$two];
// print_r($arr[1]);
$fp = fopen('file.csv', 'w');   

    for($i=0;$i<=count($arr);$i++){
        foreach ($arr[$i] as $fields) {
            fputcsv($fp, $fields, ';', '"');
            echo "Файл записано";
        }
    }
fclose($fp);
