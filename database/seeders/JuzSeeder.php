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
                    'first_verse_id' => $data['2'],
                    'last_verse' => $data['3'],
                    'last_verse_id' => $data['4'],
                ]);
            }
            $juzRow = false;
        }

        fclose($csvData);
    }
}
