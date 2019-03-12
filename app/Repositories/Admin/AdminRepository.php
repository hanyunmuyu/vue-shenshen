<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11
 * Time: 13:54
 */

namespace App\Repositories\Admin;


use App\Admin;

class AdminRepository
{
    public function getAdmin($name)
    {
        return Admin::where('name', $name)
            ->orWhere('mobile', $name)
            ->first();
    }
}
