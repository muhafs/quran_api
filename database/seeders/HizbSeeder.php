<?php

namespace Database\Seeders;

use App\Models\Hizb;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HizbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juz = 1;
        for ($i = 1; $i <= 60; $i++) {
            Hizb::create([
                'juz_id' => $juz,
                'number' => $i,
            ]);

            if ($i % 2 == 0) {
                $juz++;
            }
        }
    }
}
