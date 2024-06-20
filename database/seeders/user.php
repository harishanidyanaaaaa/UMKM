<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $user = new \App\Models\User();
        $user->name = 'admin';
        $user->email = 'haris@gmail.com';
        $user->password = bcrypt('password');
        $user->role_id = 1;
        $user->save();
    }
}
