<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = array(
            ["name" => "The Grand Ballroom", "address" => "123 Main Street", "capacity" => 500,"is_available" => "1   ", "rental_fee" => 5000.00, "available_date" => "2024-12-31", "notes" => "This is a beautiful venue with a large dance floor and a stage."],
            ["name" => "The Small Hall", "address" => "456 Elm Street", "capacity" => 100,"is_available" => "1", "rental_fee" => 1000.00, "available_date" => "2024-12-31", "notes" => "This is a cozy venue with a small dance floor and a bar."],
            ["name" => "The Outdoor Pavilion", "address" => "789 Oak Street", "capacity" => 200,"is_available" => "1  ", "rental_fee" => 2000.00, "available_date" => "2024-12-31", "notes" => "This is a lovely venue with a covered pavilion and a garden."],
            ["name" => "CJCC", "address" => "RUPP-CJCC, Russian Federation Blvd(110), Phnom Penh, Cambodia", "capacity" => 1000,"is_available" => "1  ", "rental_fee" => 10000.00, "available_date" => "2024-12-31", "notes" => "This is a beautiful venue with a large dance floor and a stage."]
        );
        DB::table('venues')->insert($data);
    }
}
