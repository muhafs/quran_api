<?php

namespace Database\Seeders;

use App\Models\Verse;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VerseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvData = fopen(base_path("local_db/quran/verses.csv"), 'r');

        $versesRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$versesRow) {
                Verse::create([
                    'number' => $data['0'],
                    'text' => $data['1'],

                    'sajda' => $data['2'],
                    'page' => $data['3'],

                    'chapter_id' => $data['4'],
                    'hizb_id' => $data['5'],
                    'juz_id' => $data['6'],
                ]);
            }
            $versesRow = false;
        }

        fclose($csvData);
    }
}
