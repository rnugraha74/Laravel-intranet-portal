<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Reza Nugraha";
        $user->email = "reza_nugraha@soemath.com";
        $user->password = crypt("reza1814","");
        $user->save();
    }
}
