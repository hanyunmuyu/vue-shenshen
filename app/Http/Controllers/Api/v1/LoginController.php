<?php

namespace App\Http\Controllers\Api\v1;

use App\Repositories\Api\v1\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $userName = $request->get('username');
        $password = $request->get('password');
        if (!$userName) {
            return $this->error('用户名不可以为空');
        }
        if (!$password) {
            return $this->error('密码不可以为空');
        }
        $user = $this->userRepository->getUserByName($userName);
        if (!$user) {
            return $this->error();
        }
        try {
            if (decrypt($user->password) == $password) {
                $user->api_token = $this->randStr();
                $user->save();
                return $this->success($user->toArray());
            } else {
                return $this->error();
            }
        } catch (\Exception $exception) {
            return $this->error();
        }
    }

    private function randStr()
    {
        return md5(str_shuffle(join('', range(0, 9))) . join('', range('a', 'z')) . join('', range('A', 'Z')));
    }
}
