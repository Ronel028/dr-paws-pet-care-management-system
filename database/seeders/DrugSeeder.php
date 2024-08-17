<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('drug_references')->truncate();
        DB::table('drug_references')->insert([
            [
                'slug' => Str::slug('Deworming'),
                'name' => 'Deworming',
            ],
            [
                'slug' => Str::slug('Heartworm Prevention'),
                'name' => 'Heartworm Prevention',
            ],
            [
                'slug' => Str::slug('Anti-Mange'),
                'name' => 'Anti-mange',
            ],
            [
                'slug' => Str::slug('Anti-Tick and Flea'),
                'name' => 'Anti-Tick and Flea',
            ]
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
