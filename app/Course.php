<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'code';

    /**
     *  Get department which offer this course
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     *  Get students who take this course
     */
    public function students()
    {
        return $this->belongsToMany('App\Student')->withPivot('midterm_marks', 'sessonal_marks', 'final_marks', 'grade_point')->withTimeStamps();
    }
}
