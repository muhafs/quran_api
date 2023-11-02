<?php

namespace Database\Seeders;

use App\Models\Juz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JuzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            Juz::create(['number' => $i]);
        }
    }
}
