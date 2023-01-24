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
}
