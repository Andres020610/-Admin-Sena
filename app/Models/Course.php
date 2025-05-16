<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public function trainingCenter()
    {
        return $this->belongsTo('App\Models\TrainingCenter');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentice');
    }


}
