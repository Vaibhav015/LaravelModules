<?php namespace App\Http\Controllers;

class AdminController extends Controller {

	public function getIndex()
	{
		echo "Index Page";
	}

	public function getDashboard()
	{
		echo "Dashboard page!!";
	}

	public function missingMethod($params=[])
	{
		dd($params);
	}

}
?>
