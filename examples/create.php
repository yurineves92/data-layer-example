<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Yuri";
$user->last_name = "Neves";
$user->genre = "M";
$user->save();

// $addr = new Address();
// $addr->add($user, "Nome da rua", "22b");
// $addr->save();

var_dump($user);