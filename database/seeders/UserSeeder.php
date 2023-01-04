<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_user')->insert([
            'id' => 1,
            'id_versi' => mt_rand(1, 2),
            'id_shortlink' => mt_rand(1, 10),
            'username' => "hghghghghghghgghh",
            'ip' => "123.456.43.2",
            'userAgent' => Str::random(13),
            'expiredToken' => mt_rand(5, 20),
            'count' => 1,
            'created_at' => date("Y-m-d")
        ]);
    }
}
