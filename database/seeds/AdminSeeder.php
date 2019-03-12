<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $userList = [
            [
                'name' => 'admin',
                'mobile' => '15701308875',
                'avatar' => '/lte/img/avatar.png',
                'password' => encrypt(123456),
            ]
        ];
        foreach ($userList as $user) {
            \App\Admin::create($user);
        }
    }
}
