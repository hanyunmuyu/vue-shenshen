<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8
 * Time: 16:57
 */

namespace App\Repositories\Api\v1;


use App\User;

class UserRepository
{
    public function getUserByName($name)
    {
        return User::where('name', $name)->first();
    }
}
