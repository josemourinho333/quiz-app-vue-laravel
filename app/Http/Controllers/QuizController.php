<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    //list all quizzes
    public function index()
    {
        $quizzes = Quiz::select('id', 'name', 'description')
                ->with(['questions' => function($query) {
                    $query->select('*')
                            ->with(['answers' => function($query) {
                                $query->select('*');
                            }]);
                }])
                ->get();
        return response()->json($quizzes);
    }

    // get 1 quiz
    public function find($id)
    {
        $quizzes = Quiz::find($id);
        return $quizzes;
    }

    // store quiz
    public function store(Request $request)
    {
        $data = $request->validate([
            'quizAnswers' => 'required'
        ]);
        // make a migration for results table and user_answers table
        // split the $request here so two can be added according to their tables
        // once new entries are added, redirect with the information so we can display it on browser for the user
    }
}
