<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ImmunizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('immunization_references')->truncate();
        DB::table('immunization_references')->insert([
            [
                'slug' => Str::slug('CDV - Canine Distemper Virus'),
                'name' => 'CDV - Canine Distemper Virus',
            ],
            [
                'slug' => Str::slug('CPV - Canine Parovirus'),
                'name' => 'CPV - Canine Parovirus',
            ],
            [
                'slug' => Str::slug('CCV - Canine Corona Virus'),
                'name' => 'CCV - Canine Corona Virus',
            ],
            [
                'slug' => Str::slug('PIV - Parainfluenza Virus'),
                'name' => 'PIV - Parainfluenza Virus',
            ],
            [
                'slug' => Str::slug('RV - Rabies Virus'),
                'name' => 'RV - Rabies Virus',
            ],
            [
                'slug' => Str::slug('L - Leptospira Spp'),
                'name' => 'L - Leptospira Spp',
            ],
            [
                'slug' => Str::slug('B - Bordetella Spp'),
                'name' => 'B - Bordetella Spp',
            ],
            [
                'slug' => Str::slug('AV2 - Adeno Virus Type 2'),
                'name' => 'AV2 - Adeno Virus Type 2',
            ],
            [
                'slug' => Str::slug('FDV - Feline Distemper Virus'),
                'name' => 'FDV - Feline Distemper Virus',
            ],
            [
                'slug' => Str::slug('FRV - Feline Rhinotracheitis Virus'),
                'name' => 'FRV - Feline Rhinotracheitis Virus',
            ],
            [
                'slug' => Str::slug('FCV - Feline Calici Virus'),
                'name' => 'FCV - Feline Calici Virus',
            ],
            [
                'slug' => Str::slug('C - Chlamydia Spp'),
                'name' => 'C - Chlamydia Spp',
            ],

        ]);
        Schema::enableForeignKeyConstraints();
    }
}
