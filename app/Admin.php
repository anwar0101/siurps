<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     *  Get user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
