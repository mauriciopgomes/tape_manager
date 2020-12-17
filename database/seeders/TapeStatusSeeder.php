<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TapeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tape_statuses')->insert([
            ['status' => "Available"],
            ['status' => "In Use"],
            ['status' => "Broken"],
            ['status' => "Reserved"]
        ]);
    }
}
