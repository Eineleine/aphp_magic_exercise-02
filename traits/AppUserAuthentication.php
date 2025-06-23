<?php
declare(strict_types=1);

//проверка авторизации пользователя на App
trait AppUserAuthentication 
{
    public string $login = 'AlexApp';
    public string $password = '100176';

    public function authenticate( string $login, string $password)
    {
        if($this->login === $login && $this->password === $password){
            echo 'пользователь приложения' . PHP_EOL;
        }  else {
            echo 'пользователь не найден' . PHP_EOL;
        }
    }
}