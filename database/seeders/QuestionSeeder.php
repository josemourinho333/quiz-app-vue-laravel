<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Questions for Quiz 1
        DB::table('questions')->insert([
            'quiz_id' => 1,
            'title' => 'What is 2 + 2?' // 4
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 1,
            'title' => 'What is 100 + 399?' // 499
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 1,
            'title' => 'What is 5 * 10?'// 50
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 1,
            'title' => 'What is 10 / 2 * 4?' // 20
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 1,
            'title' => 'What is (1 - 1) * 500?' // 0
        ]);

        // Questions for Quiz 2
        DB::table('questions')->insert([
            'quiz_id' => 2,
            'title' => 'What is the river that runs through Egypt?' // nile river
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 2,
            'title' => 'Who was the highest-paid athlete in 2022?' // messi
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 2,
            'title' => 'What was the first state?' // Delaware
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 2,
            'title' => 'In Star Wars, who built C-3PO?' // Anakin Skywalker
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 2,
            'title' => 'Who did the U.S buy Florida from?' // Spain
        ]);

        // Questions for Quiz 3
        DB::table('questions')->insert([
        'quiz_id' => 3,
        'title' => 'What singer has had a Billboard No.1 hit in each of the last four decades?' // Mariah Carey
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 3,
            'title' => 'Who was the very first American Idol winner?' // Kelly Clarkson
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 3,
            'title' => 'What pop star wrote songs for Ariana Grande, Miley Cyrus, Britney Spears and Alice Cooper?' // Kesha
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 3,
            'title' => 'Which classical composer was deaf?' // Beethoven
        ]);

        DB::table('questions')->insert([
            'quiz_id' => 3,
            'title' => 'Where was Tupac Shakur born?' // East Harlem, New York
        ]);

    }
}
