<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('product_categories')->truncate();
        DB::table('product_categories')->insert([
            [
                'slug' => Str::slug('Antibiotic Suspension'),
                'name' => 'Antibiotic Suspension',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Antibiotic Tablet'),
                'name' => 'Antibiotic Tablet',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Medication Suspension'),
                'name' => 'Medication Suspension',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Medication Tablet'),
                'name' => 'Medication Tablet',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Edibles'),
                'name' => 'Edibles',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Wellness'),
                'name' => 'Wellness',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Hygiene'),
                'name' => 'Hygiene',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Test Kits'),
                'name' => 'Test Kits',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => Str::slug('Others'),
                'name' => 'Other',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
