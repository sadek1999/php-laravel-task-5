<?php

namespace App\Enum;

enum RolesEnum: string
{
    case User = 'user';
    case Admin = 'admin';
    case Commenter = 'commenter';

    public static function labels()
    {
        return [
            self::Admin->value => 'admin',
            self::Commenter->value => 'commenter',
            self::User->value => 'user'
        ];
    }
    public function labe()
    {

    return match($this){
        self::Admin=>'admin',
        self::Commenter=>'commenter',
        self::User=>'user'
    } ;
    }
}
