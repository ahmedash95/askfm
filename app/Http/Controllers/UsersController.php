<?php

namespace App\Http\Controllers;

use App\Services\UserServiceInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(UserServiceInterface $userService, string $username){
        $user = $userService->getUserProfileByUsername($username);
        abort_if(!$user,404);
        return view('user.profile',[
            'user' => $user
        ]);
    }
}
