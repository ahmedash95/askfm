<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->UsersSeed();
    }

    private function UsersSeed()
    {
        App\User::truncate();
        factory(App\User::class)->create([
            'name' => 'Ahmed Ashraf',
            'email' => 'ahmed29329@gmail.com',
        ]);
        factory(App\User::class,100)->create();
    }
}
