<?php

namespace App\Http\Controllers;
use App\Models\Images;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    function accueil(){
        $images = images::all();
        return view('indexp/accueil', compact('images'));
    }
}
