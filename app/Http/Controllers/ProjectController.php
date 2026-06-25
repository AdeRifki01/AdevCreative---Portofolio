<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua project, diurutkan berdasarkan sort_order. 
        // Jika project sudah sangat banyak, kita bisa ganti ->get() menjadi ->paginate(12) nantinya.
        $projects = Project::orderBy('sort_order')->get();

        return view('pages.AllProjects', compact('projects'));
    }
}
