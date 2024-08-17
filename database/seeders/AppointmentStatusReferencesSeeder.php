<?php

namespace Database\Seeders;

use App\Models\AppointmentStatusReference;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AppointmentStatusReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        AppointmentStatusReference::truncate();

        AppointmentStatusReference::insert(
            [
                [
                    'slug' => Str::slug('Pending'),
                    'name' => 'Pending',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Scheduled'),
                    'name' => 'Scheduled',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Confirmed'),
                    'name' => 'Confirmed',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Checked In'),
                    'name' => 'Checked In',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('No Show'),
                    'name' => 'No Show',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Cancelled by Client'),
                    'name' => 'Cancelled by Client',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Cancelled by Clinic'),
                    'name' => 'Cancelled by Clinic',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Rescheduled'),
                    'name' => 'Rescheduled',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('On Hold'),
                    'name' => 'On Hold',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'slug' => Str::slug('Completed'),
                    'name' => 'Completed',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );


        Schema::enableForeignKeyConstraints();
    }
}
