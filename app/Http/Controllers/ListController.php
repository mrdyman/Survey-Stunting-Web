<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function listResponden(){
        $responden = Responden::with('namaSurvey')->get();
        dd($responden);
    }
}
