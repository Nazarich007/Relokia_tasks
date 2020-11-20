<?php
$email = ['test.mail@mail.com','user@site.ua','-user@site.ua','user-email@site'];
foreach($email as $item){
if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $item)) {
    echo $item."TRUE<br/>";
 }else
 {
    echo $item."FALSE<br/>";
 }
}