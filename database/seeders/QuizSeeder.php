<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('quizzes')->insert([
            'name' => 'Simple Math Quiz',
            'description' => 'Super simple math quiz for everyone.'
        ]);

        DB::table('quizzes')->insert([
            'name' => 'Trivia Quiz',
            'description' => 'Basic trivia questions.'
        ]);

        DB::table('quizzes')->insert([
            'name' => 'Quiz about music',
            'description' => 'Quiz based around music.'
        ]);
    }
}
