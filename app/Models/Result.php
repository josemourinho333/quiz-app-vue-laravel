<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function usersAnswers()
    {
        return $this->hasMany(UsersAnswer::class);
    }
}
