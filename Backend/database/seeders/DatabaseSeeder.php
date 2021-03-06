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
        \App\Models\Setting::factory(2)->create();
         \App\Models\User::factory(2)->create();
         \App\Models\Role::factory(10)->create();
         
         $this->call(UsersRoleSeeder::class);
    }
}
