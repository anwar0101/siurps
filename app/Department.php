<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'code';

    /**
     * Get students
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

    /**
     * Get Courses offered by department
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
