<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 100; $i++) {
            $data = [];
            $data['avatar'] = '/images/kkx.jpg';
            $data['name'] = 'hanyun--' . $i;
            $data['password'] = encrypt(123456);
            \App\User::create($data);
        }
    }
}
