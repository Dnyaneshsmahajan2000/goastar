<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            ['name' => 'goastar','dob'=>'2024-01-01', 'mobile' => '9876543210', 'gender' => 'Male','salary' => '10000', 'password' => '$2y$12$MEj.JH8I7OjUkGWfm87hL.z.o78tNH8KB3QrKpvpWbnWw1/23tIcO'],              ];

        DB::table('users')->insert($users);
    }
}
