<?php
declare(strict_types=1);

//проверка авторизации пользователя на Mobile
trait MobileUserAuthentication 
{
    public string $mobileLogin = 'AlexMob';
    public string $mobilePassword = '100176';

    public function authenticate(string $login, string $password): bool {
        return $login === $this->mobileLogin && $password === $this->mobilePassword;
    }
}