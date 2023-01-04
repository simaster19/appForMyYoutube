<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserPremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_user_premium')->insert([
            'id' => 1,
            'id_versi' => mt_rand(1, 3),
            'username' => "coba1",
            'pass' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'expired_at' => date("Y-m-d H:i:s")

        ]);
    }
}
