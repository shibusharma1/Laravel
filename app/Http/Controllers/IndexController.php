<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Program;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        return Student::with('getProgram')->get();
    }

}
