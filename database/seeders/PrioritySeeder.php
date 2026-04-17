<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    public function run(): void
    {
        Priority::updateOrCreate(
            ['name' => 'Low'],
            ['color' => '#22c55e', 'level' => 1]
        );

        Priority::updateOrCreate(
            ['name' => 'Medium'],
            ['color' => '#eab308', 'level' => 2]
        );

        Priority::updateOrCreate(
            ['name' => 'High'],
            ['color' => '#f97316', 'level' => 3]
        );

        Priority::updateOrCreate(
            ['name' => 'Critical'],
            ['color' => '#ef4444', 'level' => 4]
        );
    }
}
