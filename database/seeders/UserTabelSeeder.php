<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role'=>0
        ]);
        $user = User::create([
            'name' => 'Student',
            'email' => 'studentadmin@studentadmin.com',
            'password' => bcrypt('password'),
            'role'=>1
        ]);
    }
}
