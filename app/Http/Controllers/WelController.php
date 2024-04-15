<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\curso;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class WelController extends Controller
{
    public function index()
    {   
       
        $cursos = DB::select("Select * from cursos");
        return Inertia::render('Home', [
            'cursos' => $cursos,
            'canLogin' => route('login'),
            'canRegister' => route('register'),
            'laravelVersion' => app()->version(),
            'phpVersion' => PHP_VERSION,
        ]);
    }
}