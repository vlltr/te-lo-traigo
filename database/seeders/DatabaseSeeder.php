<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $initialProductTypes = [
            [
                "name" => "Computadoras",
                "freight" => 1.00,
                "import_cost" => 2.00,
                "sure" => 1.00,
                "tax" => 13.00
            ],
            [
                "name" => "Ropa",
                "freight" => 1.00,
                "import_cost" => 5.00,
                "sure" => 2.00,
                "tax" => 15.00
            ],
            [
                "name" => "Repuestos para vehículos",
                "freight" => 6.00,
                "import_cost" => 4.00,
                "sure" => 10.00,
                "tax" => 13.00
            ]
        ];

        foreach ($initialProductTypes as $type) {
            \App\Models\ProductType::create($type);
        }
    }
}
