<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'video_src',
    ];

    public function files()
    {
        return $this->hasMany(Lesson::class);
    }
}
