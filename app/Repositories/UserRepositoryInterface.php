<?php
/**
 * Created by PhpStorm.
 * User: Ash
 * Date: 10/11/17
 * Time: 1:51 AM
 */

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function limit(int $limit);

    public function getUserWithQuestionsByUserName($username);
}