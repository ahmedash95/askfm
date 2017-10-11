<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 10/11/17
 * Time: 1:51 AM
 */

namespace App\Repositories;

use App\User;

class UserRepository implements UserRepositoryInterface
{

    public function limit(int $limit)
    {
        return User::limit($limit)->orderByRaw("RAND()")->get();
    }

    public function getFollowing($userId){
        return User::find($userId)->following;
    }

    public function getUserWithQuestionsByUserName($username){
        return User::with('questions','questions.answers')
                ->where('username',$username)->first();
    }
}