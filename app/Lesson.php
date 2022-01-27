<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'order',
        'description',
        'video_src',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(
                'passed'
                )
            ->withTimestamps();
    }
}
