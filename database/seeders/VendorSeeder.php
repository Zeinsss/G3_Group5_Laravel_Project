<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $data = array(
        ["name" =>"KOI", "services" => "Selling bubble tea","pricing" => "500", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Starbucks", "services" => "Selling coffee","pricing" => "1000", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"McDonald", "services" => "Selling fast food","pricing" => "2000", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"KFC", "services" => "Selling fast food","pricing" => "1500", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Subway", "services" => "Selling sandwich","pricing" => "800", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Pizza Hut", "services" => "Selling pizza","pricing" => "1200", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Burger King", "services" => "Selling burger","pricing" => "1000", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Dunkin Donuts", "services" => "Selling donuts","pricing" => "500", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Jollibee", "services" => "Selling fast food","pricing" => "1500", "notes" => "Very good services of serving drink and affordable"],
        ["name" =>"Popeyes", "services" => "Selling fast food","pricing" => "1500", "notes" => "Very good services of serving drink and affordable"]
       );
        DB::table('vendors')->insert($data);
    }
}
