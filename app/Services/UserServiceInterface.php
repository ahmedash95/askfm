<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 10/11/17
 * Time: 1:44 AM
 */

namespace App\Services;


interface UserServiceInterface
{
    public function hasFollowing();

    public function getUsers($int);
}