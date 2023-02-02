<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Result;
use App\Models\UsersAnswer;
use Illuminate\Support\Facades\Log;

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

    // store users quiz submission
    public function store(Request $request)
    {
        $data = $request->all();
        $quizAnswers = $data['quizAnswers'];

        $result = [
            'quizId' => $quizAnswers['quizId'],
            'score' => $quizAnswers['score'],
        ];

        $newResult = new Result();
        $newResult->quiz_id = $result['quizId'];
        $newResult->score = $result['score'];
        $newResult->save();

        foreach ($quizAnswers['answers'] as $answer)
        {
            $newAnswer = new UsersAnswer();
            $newAnswer->result_id = $newResult->id;
            $newAnswer->question_id = $answer['questionId'];
            $newAnswer->answer = $answer['answer'];
            $newAnswer->correct = $answer['correctAnswer'];
            $newAnswer->save();
        };

        return response()->json($newResult);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $newQuiz = $data['newQuiz'];

        Log::info($newQuiz);
        $new = new Quiz();
        $new->name = $newQuiz['quizName'];
        $new->description = 'Placeholder Description';
        $new->save();

        
    }
}
