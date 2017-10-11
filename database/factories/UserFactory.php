<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password,$email,$name,$username;

    return [
        'name' => $name ?: $faker->name,
        'username' => $username ?: $faker->userName,
        'email' => $email ?: $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt(123456),
        'remember_token' => str_random(10),
    ];
});
