<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TapeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tape_types')->insert([
            ['type' => "LTO-1"],
            ['type' => "LTO-2"],
            ['type' => "LTO-3"],
            ['type' => "LTO-4"],
            ['type' => "LTO-5"],
            ['type' => "LTO-6"],
            ['type' => "LTO-7"],
            ['type' => "LTO-8"],
            ['type' => "LTO-9"],            
            ['type' => "LTO-10"]
        ]);
    }
}
