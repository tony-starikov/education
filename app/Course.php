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

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(
                'enroll_status',
                'payment_status',
                'enroll_time',
                'payment_time'
                )
            ->withTimestamps();
    }
}
