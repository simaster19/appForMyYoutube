<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SourcecodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_sourcecode')->insert([
            'id' => 1,
            'namaSc' => "giffy.php",
            'namaApkWeb' => "kajhdkjahdkha",
            'linkYt' => "kjsdkjksjdkjskj.com",
            'status' => "UPLOADED",
            'created_at' => date("Y-m-d")
        ]);
    }
}
