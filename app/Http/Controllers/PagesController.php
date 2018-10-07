<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index
    public function home()
    {
		$tasks = [
			'1task','2task','3task'
		];

		return view('welcome',[
			'tasks' => $tasks
		]);

    }

    public function about()
    {
    	return view('about');
    }

    public function contact()
    {
    	return view('contact');
    }

}
