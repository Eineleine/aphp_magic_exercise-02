<?php
declare(strict_types=1);
// require_once 'Measurements.php';

include 'autoloader.php';
spl_autoload_register('autoloader');

$userVerification = new UserVerification();

//авторизация пользователя App
$userVerification->authenticate("AlexApp", '100176');


//авторизация пользователя Mobile
$userVerification->authenticate("AlexMob", '100176');

//неверные креды
$userVerification->authenticate("Alex", '100');





