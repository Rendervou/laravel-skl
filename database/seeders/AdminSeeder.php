<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new App\Models\User;
        $user->name = " admin fathi";
        $user->email = "afterfriday.media@gmail.com";
        $user->level = "admin";
        $user->password = 1234567;
        $user->save();




    }
}
