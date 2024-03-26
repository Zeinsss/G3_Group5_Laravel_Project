<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Event 1', 'description' => 'Event 1 description', 'date' => '2021-10-01', 'time' => '12:00:00', 'client_id' => '1', 'status' => 'Active', 'budget' => '5000', 'vendor_id' => '1', 'venue_id' => '1'],
            // create 5 more data
            ['name' => 'Event 2', 'description' => 'Event 2 description', 'date' => '2021-10-05', 'time' => '12:00:00', 'client_id' => '1', 'status' => 'Active', 'budget' => '5000', 'vendor_id' => '1', 'venue_id' => '1'],
            ['name' => 'Event 3', 'description' => 'Event 3 description', 'date' => '2021-10-10', 'time' => '12:00:00', 'client_id' => '1', 'status' => 'Active', 'budget' => '5000', 'vendor_id' => '1', 'venue_id' => '1']
        ];
        DB::table('events')->insert($data);
    }
}
