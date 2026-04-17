<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        Status::updateOrCreate(
            ['name' => 'Open'],
            ['color' => '#3b82f6']
        );

        Status::updateOrCreate(
            ['name' => 'In Progress'],
            ['color' => '#a855f7']
        );

        Status::updateOrCreate(
            ['name' => 'On Hold'],
            ['color' => '#eab308']
        );

        Status::updateOrCreate(
            ['name' => 'Resolved'],
            ['color' => '#22c55e']
        );

        Status::updateOrCreate(
            ['name' => 'Closed'],
            ['color' => '#6b7280']
        );
    }
}
