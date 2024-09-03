<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Storage::json('data/projectdata.json');
        return view('project', ['projects' => $projects]);
    }

    public function show($id)
    {
        $projectDetail = "";
        $projects = Storage::json('data/projectdata.json');
        
        foreach ($projects as $project) {
            if ($id == $project['id']) {
                $projectDetail = $project;
                break;
            }
        }
        return view('project_detail', ['projectDetail' => $projectDetail]);
    }
}
