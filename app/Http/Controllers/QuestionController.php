<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function question()
    {
        return view('question');
    }
}
