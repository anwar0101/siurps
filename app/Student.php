<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'reg';

    /**
     *  Get department
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     *  Get courses which is taken by this student
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course')->withPivot('midterm_marks', 'sessonal_marks', 'final_marks', 'grade_point')->withTimeStamps();
    }

    /**
     *  Get user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
