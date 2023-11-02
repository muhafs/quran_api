<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvData = fopen(base_path("local_db/quran/chapters.csv"), 'r');

        $chaptersRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$chaptersRow) {
                Chapter::create([
                    'number' => $data['0'],
                    'name' => $data['1'],
                    'number_of_verses' => $data['2'],
                    'revelation' => $data['3'],
                    'chronological_order' => $data['4'],
                    'has_sajda' => $data['5'],
                    'juz_id' => $data['6'],
                    'hizb_id' => $data['7'],
                ]);
            }
            $chaptersRow = false;
        }

        fclose($csvData);
    }
}
