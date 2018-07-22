<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/21
 * Time: 18:24
 */

namespace Wbfa\Authentication\Facades;

use Illuminate\Support\Facades\Facade;
use Wbfa\Authentication\Authentication as AuthenticationSrc;

class Authentication extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AuthenticationSrc::class;
    }
}