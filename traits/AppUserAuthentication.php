<?php
declare(strict_types=1);

//проверка авторизации пользователя на App
trait AppUserAuthentication 
{
    public string $appLogin = 'AlexApp';
    public string $appPassword = '100176';

    public function authenticate(string $login, string $password): bool {
        return $login === $this->appLogin && $password === $this->appPassword;
    }
}