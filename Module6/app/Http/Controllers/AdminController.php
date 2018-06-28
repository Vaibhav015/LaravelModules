<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	
	public function index()
	{
		return view('test-data')->with('data',"<h1>Echo'ed with test-blade</h1>");
	}

	public function dashboard()
	{
		return view('dashboard-data')->with('data',"<h1>Echo'ed with dashboard-blade</h1>");
	}
}
