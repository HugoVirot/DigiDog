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
        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->name = Str::random(10);
            $user->email = Str::random(10) . '@domain.com';
            $user->password = Hash::make('motdepasse');
            $user->save();
        }
    }
}
