<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;

$user = new User;
$list = $user->find()->fetch(true);

foreach($list as $userItem){
    var_dump($userItem->data());
    foreach($userItem->addresses() as $address){
        var_dump($address->data());
    }
}