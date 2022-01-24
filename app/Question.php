<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'lesson_id',
        'question',
        'answer_true',
        'answer_false_1',
        'answer_false_2',
    ];
}
