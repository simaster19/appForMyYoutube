<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShortlinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_shortlink')->insert([
            'id' => 1,
            'short' => "jdhkajhdkjdh.com",
            'token' => "jhkjhkh",
            'created_at' => date("Y-m-d")
        ]);
    }
}
