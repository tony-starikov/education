<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Checking user is admin
     */
    public function isAdmin()
    {
        return $this->is_admin == 1;
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)
            ->withPivot(
                'enroll_status',
                'payment_status',
                'enroll_time',
                'payment_time'
                )
            ->withTimestamps();
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)
            ->withPivot(
                'passed'
                )
            ->withTimestamps();
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class)->wherePivot('enroll_status', 1);
    }
}
