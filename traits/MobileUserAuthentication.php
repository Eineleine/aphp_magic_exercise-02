<?php
declare(strict_types=1);

//проверка авторизации пользователя на Mobile
trait MobileUserAuthentication 
{
    public string $login1 = 'AlexMob';
    public string $password1 = '100176';

    public function authenticate(string $login, mixed $password)
    {
        if($this->login1 === $login && $this->password1 === $password){
            echo 'пользователь мобильного приложения' . PHP_EOL;
        } else {
            echo 'пользователь не найден' . PHP_EOL;
        }
    }
}