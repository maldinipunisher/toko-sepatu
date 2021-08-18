<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->email = 'admin@admin.com';
        $user->name = 'admin';
        $user->password = bcrypt('12345678');
        $user->alamat = 'banyuwangi';
        $user->role='admin';
        $user->save();
    }
}
