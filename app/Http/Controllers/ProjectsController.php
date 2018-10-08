<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;


class ProjectsController extends Controller
{
    //

    public function index()
    {
    	$projects = \App\Project::all();

    	$names = ['Pedro','Michael','Ewa'];
    	// return $projects;
    	return view('projects.index',compact('projects' , 'names')/*[
    		'projects' => $projects,
    		'names' => $names
    	]*/);
    }

}
