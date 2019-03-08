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
        $userName = $request->get('name');
        $user=$this->userRepository->getUserByName($userName);
        if (!$user) {
            return $this->error();
        }
        return $this->success($user->toArray());
    }
}
