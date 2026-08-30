<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'course_skills')
            ->withPivot(['id', 'order', 'type'])
            ->withTimestamps()
            ->orderByPivot('order');
    }
}
