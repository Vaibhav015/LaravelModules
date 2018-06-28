<?php
	namespace App\Http\Controllers;

	class AdminController extends Controller
	{
		public function index(){
			echo "Index method from AdminController";	
		}

		public function dashboard($domain){
			echo "$domain";
		}
	}


?>