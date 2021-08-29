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
        $user->user_id = 1 ;
        $user->email = 'admin@admin.com';
        $user->name = 'admin';
        $user->password = bcrypt('12345678');
        $user->address = 'banyuwangi';
        $user->role=1;
        $user->phone="082242751237";
        // $user->cart=$user->user_id ;
        $user->save();

        // $user2 = new User();
        // $user2->user_id = 2 ;
        // $user2->email = 'maldinipunisher@gmail.com';
        // $user2->name = 'Maldini';
        // $user2->password = bcrypt('123456');
        // $user2->address = 'banyuwangi';
        // $user2->role=2;
        // $user2->phone="082242751237";
        // $user2->cart=$user2->user_id ;

        // $user2->save();
    }
}
