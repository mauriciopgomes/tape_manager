<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class TapeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('tape_statuses')->insert([
            [
                'status'     => 'Available',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'status'     => 'In Use',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'status'     => 'Broken',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'status'     => 'Reserved',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }
}
