<?php

use Illuminate\Database\Seeder;
use App\AdminUser;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new AdminUser();
        $user->name = "Admin";
        $user->email = "admin@soemath.com";
        $user->password = crypt("pass2vh3cp24z10","");
        $user->save();
    }
}
