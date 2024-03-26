<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'John Doe', 'email' => 'Johndoe@example.com', 'role' => 'attendee', 'register_status' => '1', 'attendance' => '1', 'event_id' => '1'],
            // create 5 more data
            ['name' => 'Jane Doe', 'email' => 'Janedoe@example.com', 'role' => 'attendee', 'register_status' => '1', 'attendance' => '1', 'event_id' => '1'],
            ['name' => 'John Smith', 'email' => 'Johnsmith@example.com', 'role' => 'attendee', 'register_status' => '1', 'attendance' => '1', 'event_id' => '1']
        ];
        DB::table('attendees')->insert($data);
    }
}
