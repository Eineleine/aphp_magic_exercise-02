<?php
declare(strict_types=1);

//проверка и печать данных регистрации пользователяя полученных из вне
class UserVerification
{
    use AppUserAuthentication, MobileUserAuthentication 
    {
        AppUserAuthentication:: authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    }
    
  
}
