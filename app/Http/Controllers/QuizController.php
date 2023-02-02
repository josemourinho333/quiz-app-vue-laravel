<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
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
        $quizInfo = $data['newQuiz'];

        $newQuiz = new Quiz();
        $newQuiz->name = $quizInfo['quizName'];
        $newQuiz->description = 'Placeholder Description';
        $newQuiz->save();

        $newQuestion = new Question();
        $newQuestion->quiz_id = $newQuiz->id;
        $newQuestion->title = $quizInfo['questionList'][0]['question'];
        $newQuestion->save();

        $newWrongAnswerOne = new Answer();
        $newWrongAnswerOne->question_id = $newQuestion->id;
        $newWrongAnswerOne->option = $quizInfo['questionList'][0]['wrongAnswerOne']['answer'];
        $newWrongAnswerOne->correct = $quizInfo['questionList'][0]['wrongAnswerOne']['correct'];
        $newWrongAnswerOne->save();

        $newWrongAnswerTwo = new Answer();
        $newWrongAnswerTwo->question_id = $newQuestion->id;
        $newWrongAnswerTwo->option = $quizInfo['questionList'][0]['wrongAnswerTwo']['answer'];
        $newWrongAnswerTwo->correct = $quizInfo['questionList'][0]['wrongAnswerTwo']['correct'];
        $newWrongAnswerTwo->save();

        $newWrongAnswerThree = new Answer();
        $newWrongAnswerThree->question_id = $newQuestion->id;
        $newWrongAnswerThree->option = $quizInfo['questionList'][0]['wrongAnswerThree']['answer'];
        $newWrongAnswerThree->correct = $quizInfo['questionList'][0]['wrongAnswerThree']['correct'];
        $newWrongAnswerThree->save();

        $newCorrectAnswer = new Answer();
        $newCorrectAnswer->question_id = $newQuestion->id;
        $newCorrectAnswer->option = $quizInfo['questionList'][0]['correctAnswer']['answer'];
        $newCorrectAnswer->correct = $quizInfo['questionList'][0]['correctAnswer']['correct'];
        $newCorrectAnswer->save();

        return 'Success';
    }
}
