<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

public function home()
{
    return view('home');
}

public function about()
{
    return view('about');
}

use App\Models\Project;
public function projects()
{
    $projects = Project::all(); // Fetch projects from the database
    return view('projects', compact('projects'));
}


}
