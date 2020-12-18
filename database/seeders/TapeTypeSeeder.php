<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class TapeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('tape_types')->insert([
            [
                'type' => 'LTO-1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-3',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-4',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-5',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-6',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-7',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-8',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'type' => 'LTO-9',
                'created_at' => $now,
                'updated_at' => $now
            ],            
            [
                'type' => 'LTO-10',
                'created_at' => $now,
                'updated_at' => $now
                ]
        ]);
    }
}
