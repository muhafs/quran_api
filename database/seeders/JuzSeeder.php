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
        $csvData = fopen(base_path("local_db/quran/juz.csv"), 'r');

        $juzRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$juzRow) {
                Juz::create([
                    'number' => $data['0'],
                    'first_verse' => $data['1'],
                    'last_verse' => $data['2'],
                ]);
            }
            $juzRow = false;
        }

        fclose($csvData);
    }
}
