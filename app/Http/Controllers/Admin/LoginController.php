<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Admin\AdminRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    private $adminRepository;

    public function __construct(AdminRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $name = $request->get('name');
        $password = $request->get('password');
        $user = $this->adminRepository->getAdmin($name);
        if (!$user) {
            return $this->error('用户不存在');
        }
        try {
            if (decrypt($user->password) != $password) {
                return $this->error('密码错误');
            }
            auth('admin')->login($user);
            return $this->success();
        } catch (\Exception $exception) {
            return $this->error('密码错误');
        }
    }

    public function logout(Request $request)
    {
        auth('admin')->logout();
        return redirect('/admin/login');
    }
}
