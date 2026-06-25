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
        $projects = Project::orderBy('sort_order')->take(6)->get();
        $skills = Skill::orderBy('sort_order')->get();
        $organizations = Organization::orderBy('sort_order')->get();

        return view('pages.home', compact('projects', 'skills', 'organizations'));
    }
}
