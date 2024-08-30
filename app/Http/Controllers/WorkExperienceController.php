<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkExperienceController extends Controller
{
    //
    public function workExperience(){
        $experiences = Storage::json('experience.json');
        return view("pages.workExperience", compact("experiences"));
    }
}
