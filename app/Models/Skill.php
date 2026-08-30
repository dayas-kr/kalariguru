<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_skills')
            ->withPivot(['id', 'order', 'type'])
            ->withTimestamps();
        // no ->orderByPivot('order') here — that order is per-course,
        // ordering a skill's list of courses by it doesn't mean much
    }
}
