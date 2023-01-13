<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Q1 Answers
        DB::table('answers')->insert([
            'question_id' => 1,
            'option' => '4', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'option' => '8', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'option' => '6', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 1,
            'option' => '0', // 4
            'correct' => false,
        ]);

        // Q2 Answers
        DB::table('answers')->insert([
            'question_id' => 2,
            'option' => '499', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'option' => '599', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'option' => '399', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 2,
            'option' => '199', // 4
            'correct' => false,
        ]);

        // Q3 Answers
        DB::table('answers')->insert([
            'question_id' => 3,
            'option' => '50', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'option' => '15', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'option' => '2', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 3,
            'option' => '55', // 4
            'correct' => false,
        ]);

        // Q4 Answers
        DB::table('answers')->insert([
            'question_id' => 4,
            'option' => '20', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'option' => '1.5', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'option' => '80', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 4,
            'option' => '9', // 4
            'correct' => false,
        ]);

        // Q5 Answers
        DB::table('answers')->insert([
            'question_id' => 5,
            'option' => '0', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'option' => '500', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'option' => '-500', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 5,
            'option' => '499', // 4
            'correct' => false,
        ]);

        // Q6 Answers
        DB::table('answers')->insert([
            'question_id' => 6,
            'option' => 'Nile River', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'option' => 'Amazon River', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'option' => 'Red River', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 6,
            'option' => 'Bhima River', // 4
            'correct' => false,
        ]);

        // Q7 Answers
        DB::table('answers')->insert([
            'question_id' => 7,
            'option' => 'Leo Messi', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'option' => 'LeBron James', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'option' => 'Critiano Ronaldo', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 7,
            'option' => 'Roger Federer', // 4
            'correct' => false,
        ]);

        // Q8 Answers
        DB::table('answers')->insert([
            'question_id' => 8,
            'option' => 'Delaware', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'option' => 'Washington', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'option' => 'Texas', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 8,
            'option' => 'Ohio', // 4
            'correct' => false,
        ]);

        // Q9 Answers
        DB::table('answers')->insert([
            'question_id' => 9,
            'option' => 'Anakin Skywalker', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'option' => 'Luke Skywalker', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'option' => 'Mace Windu', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 9,
            'option' => 'Obi-Wan Kenobi', // 4
            'correct' => false,
        ]);

        // Q10 Answers
        DB::table('answers')->insert([
            'question_id' => 10,
            'option' => 'Spain', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'option' => 'Mexico', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'option' => 'Cuba', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 10,
            'option' => 'Japan', // 4
            'correct' => false,
        ]);

        // Q11 Answers
        DB::table('answers')->insert([
            'question_id' => 11,
            'option' => 'Mariah Carey', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'option' => 'Whitney Houston', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'option' => 'Michael Jackson', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 11,
            'option' => 'Madonna', // 4
            'correct' => false,
        ]);

        // Q12 Answers
        DB::table('answers')->insert([
            'question_id' => 12,
            'option' => 'Kelly Clarkson', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'option' => 'Harry Styles', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'option' => 'Justin Bieber', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 12,
            'option' => 'Celine Dion', // 4
            'correct' => false,
        ]);

        // Q13 Answers
        DB::table('answers')->insert([
            'question_id' => 13,
            'option' => 'Kesha', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'option' => 'Lady Gaga', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'option' => 'Madonna', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 13,
            'option' => 'Jessie J', // 4
            'correct' => false,
        ]);

        // Q14 Answers
        DB::table('answers')->insert([
            'question_id' => 14,
            'option' => 'Beethoven', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'option' => 'Mozart', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'option' => 'Pachelbel', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 14,
            'option' => 'Bach', // 4
            'correct' => false,
        ]);

        // Q15 Answers
        DB::table('answers')->insert([
            'question_id' => 15,
            'option' => 'East Harlem, New York', // 4
            'correct' => true,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'option' => 'Compton, California', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'option' => 'Vancouver, British Columbia', // 4
            'correct' => false,
        ]);

        DB::table('answers')->insert([
            'question_id' => 15,
            'option' => 'Portland, Oregon', // 4
            'correct' => false,
        ]);
    }
}
