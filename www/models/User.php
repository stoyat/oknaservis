<?php

class User
{

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen(trim($name)) >= 8) {
            return true;
        }
        return false;
    }
    
    public static function checkCity ($city) {
        if(strlen(trim($city))>=8) {
            return true;
        }
        return false;
    }
    
}
