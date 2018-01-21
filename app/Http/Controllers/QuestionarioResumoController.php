<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionarioResumoController extends Controller
{
    public function index()
    {
        return view('admin.questionarioResumo');
    }
}
