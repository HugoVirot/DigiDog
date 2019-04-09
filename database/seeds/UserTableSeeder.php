<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('4lph4-bet4');
        $user->is_admin = 1;
        $user->save();
    }
}
