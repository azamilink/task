<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name' => 'Aswad Zami',
        //     'email' => 'zamiaswad@gmail.com',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => Carbon::now()
        // ]);

        $this->call([UserSeeder::class, TaskSeeder::class]);
    }
}
