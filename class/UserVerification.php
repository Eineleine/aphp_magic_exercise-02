<?php
declare(strict_types=1);

//проверка и печать данных регистрации пользователяя полученных из вне
class UserVerification
{
     use AppUserAuthentication {
        AppUserAuthentication::authenticate insteadof MobileUserAuthentication;
        AppUserAuthentication::authenticate as authenticateApp;
    }
    use MobileUserAuthentication {
        MobileUserAuthentication::authenticate insteadof AppUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    } 

     public function authenticate(string $login, string $password): void {
        if ($this->authenticateApp($login, $password)) {
            echo "Пользователь авторизован как пользователь приложения.\n";
        } elseif ($this->authenticateMobile($login, $password)) {
            echo "Пользователь авторизован как пользователь мобильного приложения.\n";
        } else {
            echo "Ошибка авторизации: пользователь не распознан.\n";
        }
    }
}
