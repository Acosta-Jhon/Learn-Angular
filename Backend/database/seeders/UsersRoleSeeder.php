<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users_Role;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = new Users_Role();
        $user_role->user_id = 1;
        $user_role->role_id = 1;
        $user_role->save();

        $user_role2 = new Users_Role();
        $user_role2->user_id = 1;
        $user_role2->role_id = 2;
        $user_role2->save();
    }
}
