<?php

use App\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "admin";
        $user->email = "admin@jobboard.jp";
        $user->password = Hash::make('workordie');
        $user->remember_token = str_random(10);
        $user->save();
    }
}
