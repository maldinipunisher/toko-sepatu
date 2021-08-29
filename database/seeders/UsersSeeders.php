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
        $user->profilepic = "adminganteng.jpg";
        $user->description = "Seorang Admin Biasa";
        $user->save();

        $user1 = new User();
        $user1->user_id = 2 ;
        $user1->email = 'coconut@coconut.com';
        $user1->name = 'kepala muda';
        $user1->password = bcrypt('12345678');
        $user1->address = 'banyuwangi';
        $user1->role=2;
        $user1->phone="082876678555";
        $user1->profilepic = "kepalamuda.jpg";
        $user1->description = "es kepala muda njoy";
        $user1->save();

        $user2 = new User();
        $user2->user_id = 3 ;
        $user2->email = 'kamalgans@muach.com';
        $user2->name = 'latifatul kamal';
        $user2->password = bcrypt('12345678');
        $user2->address = 'mars gang sempu';
        $user2->role=2;
        $user2->phone="082156245338";
        $user2->profilepic = "latifatul.jpg";
        $user2->description = "ingat kata patrick, halo sayang";
        $user2->save();


    }
}
