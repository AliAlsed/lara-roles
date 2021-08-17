<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        $user = User::firstOrCreate([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Bader123456'),
        ]);
        $user->attachRole('administrator');

        $user2 = User::firstOrCreate([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => bcrypt('ali123456'),
        ]);
        $user2->attachRole('user');
    }
}
