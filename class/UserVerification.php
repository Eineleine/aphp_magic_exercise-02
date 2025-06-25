<?php
declare(strict_types=1);

//проверка и печать данных регистрации пользователяя полученных из вне
class UserVerification
{
     use AppUserAuthentication, MobileUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    }

     public function authentication(string $login, string $password): void {
        if ($this->authenticate($login, $password)) {
            echo "Пользователь авторизован как пользователь приложения.\n";
        } elseif ($this->authenticateMobile($login, $password)) {
            echo "Пользователь авторизован как пользователь мобильного приложения.\n";
        } else {
            echo "Ошибка авторизации: пользователь не распознан.\n";
        }
    }
}
