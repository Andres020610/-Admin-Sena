<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{

    public function teachers()
    {
        return $this->hasMany('App\Models\Teacher');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function computers()
    {
        return $this->hasMany('App\Models\Computer');
    }
}
