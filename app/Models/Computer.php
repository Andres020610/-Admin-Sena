<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{

    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentice');
    }

}
