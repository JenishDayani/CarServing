<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\db_users;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('db_users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('789'),
            'role_id' => 1,
            'action' => '',
        ]);
    }
}
