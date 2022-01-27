<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'lesson_id',
        'question',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
