<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{


    public function create()
    {
        return view('training_centers.create');
    }


    public function store(Request $request)
    {

        $trainingCenter = new TrainingCenter();

        $trainingCenter->name = $request->name;

        $trainingCenter->save();

        return $trainingCenter;
    }
}
