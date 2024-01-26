<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // collect([
        //     [
        //         'name' => 'Aswad Zami',
        //         'email' => 'zamiaswad@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Haris Martin',
        //         'email' => 'martinharis@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_at' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });

        User::factory()->count(10)->create();
    }
}
