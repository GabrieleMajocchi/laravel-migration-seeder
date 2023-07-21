<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function get_trains(){

        $trains = Train::all();

        return view('welcome', compact('trains'));
    }
}
