<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class VetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('veterinarians')->truncate();
        DB::table('veterinarians')->insert([
            [
                'name' => 'John Doe',
                'license_no' => '6789',
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
