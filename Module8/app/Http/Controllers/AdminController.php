<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	public function index()
	{
		$data = [
			['name'=>'vaibhav'],
			['name'=>'Saif'],
			['name'=>'Pratham']
		];
	return view('test-data',compact('data'));	
	}

	

}
?>