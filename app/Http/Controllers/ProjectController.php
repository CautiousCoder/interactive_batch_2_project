<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    //
    public function project() {
        $projects = Storage::json('projects.json');
        return view("pages.projects", compact("projects"));
    }

    public function projectView(Request $request) {
        $projects = Storage::json('projects.json');
        $currentProject = [];
        foreach ($projects as $project) {
            if($project['slug'] == $request->slug){
                $currentProject[] = $project;
            }
        }
        return view("pages.project", compact("currentProject"));
    }
}
