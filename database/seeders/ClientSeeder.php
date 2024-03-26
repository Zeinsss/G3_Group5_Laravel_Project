<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data to be inserted
        $clients = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123-456-7890',
                'budgets' => 5000.00,
                'notes' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '987-654-3210',
                'budgets' => 8000.00,
                'notes' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ]
            // Add more sample data as needed
        ];

        // Insert data into the clients table
        DB::table('clients')->insert($clients);
    }
}
