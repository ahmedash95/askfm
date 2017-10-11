<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 10/11/17
 * Time: 1:44 AM
 */

namespace App\Services;


use App\Repositories\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private $usersRepository;

    public function __construct(UserRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function getFollowing(int $userId = null)
    {
        $userId = $userId ?? auth()->id();
        return $this->usersRepository->getFollowing($userId);
    }

    public function hasFollowing(int $userId = null)
    {
        return $this->getFollowing($userId)->count() > 0;
    }

    public function getUsers($int)
    {
        return $this->usersRepository->limit(10);
    }

    public function getUserProfileByUsername($username){
        return $this->usersRepository->getUserWithQuestionsByUserName($username);
    }

}