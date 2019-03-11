<?php

namespace Core;
class AuthComponent

{

    public static function checkAuthenticated()
    {

        if ((isset($_SESSION['isConnnected'])) && ($_SESSION['isConnnected'] === true)) {
            return true;
        } else {
            return false;
        }

    }

    public static function create()
    {
        $_SESSION['isConnnected'] = true;

    }

    public static function delete()
    {

        unset($_SESSION['isConnnected']);
    }


}