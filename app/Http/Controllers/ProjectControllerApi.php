<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectControllerApi extends Controller
{
    public function index(){
        $project = Project::all();
        return response()->json($project);
    }
}
