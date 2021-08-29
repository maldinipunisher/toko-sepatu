<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->role_id = 1;
        $admin->name = 'admin';
        $admin->permissions = 'update,create,delete,read';
        $admin->save();

        $user = new Role();
        $user->role_id = 2 ;
        $user->name = 'user';
        $user->permissions = 'read';
        $user->save();
    }
}
