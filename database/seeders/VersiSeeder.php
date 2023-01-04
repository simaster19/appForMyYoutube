<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VersiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_versi')->insert([
            'id' => 1,
            'namaSc' => "giffy.php",
            'versi' => 2.1,
            'link' => "kjsdkjksjdkjskj.com",
            'message' => "sjdhjdhjh",
            'status' => "Active"

        ]);
    }
}
