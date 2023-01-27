<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Quiz;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quizzes/{id}', function ($id) {
    $quiz = Quiz::with([
        'questions' => function ($query) {
            $query->select('*')
                ->with([
                    'answers' => function ($query) {
                                $query->select('*');
                            }
                ]);
        }
    ])
    ->where('id', $id)
    ->first();
    return Inertia::render('Quizzes/Show', [
        'id' => $id,
        'quiz' => $quiz,
    ]);
})->name('quiz');

Route::get('/quizzes', function () {
    return Inertia::render('Quizzes');
})->middleware(['auth', 'verified'])->name('quizzes');

Route::get('/completed', function () {
    return Inertia::render('Completed');
})->name('completed');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
