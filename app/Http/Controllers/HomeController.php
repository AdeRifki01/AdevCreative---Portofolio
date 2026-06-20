<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Organization;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skill::all();
        $organizations = Organization::orderBy('sort_order')->get();

        return view('pages.home', compact('projects', 'skills', 'organizations'));
    }
}
