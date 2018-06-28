<?php
	
	Route::get('/',function(){
		return("Hello Laravel!!");
	});
	Route::get('admin', 'AdminController@index');
	
	Route::resource('abc', 'AbcController@index');
	
	/*
	Route::get('/admin',function(){
		return("This is the Admin page!!");
	});
	/*

	/* When only one number is passed */

	/*
	Route::get('/admin/{number1}',function($number1){
		echo "The Number is: $number1";
	});
	*/

	/* When two numbers are passed */

	/*
	Route::get('/admin/{number1}/{number2}',function($number1,$number2){
		echo "Number1 is: $number1, Number2 is: $number2";
	});
	*/

	/* When the second value passed is set as optional */

	/*
	Route::get('/admin/{number1}/{number2?}',function($number1,$number2=""){
		echo "Number1 is: $number1, Number2 is: $number2";
	});
	*/

	/* When we restrict that the value passed should be a number */

	/*
	Route::get('/admin/{number1}/{number2}',function($number1,$number2){
		echo "Number1 is: $number1, Number2 is: $number2";
	})->where(['number1','number2'=>"[0-9]+"]);
	*/

	/* When we have to call controller */

	
	

	/* url-method example */

	/*
	Route::get('/admin/{number1}/{number2}',function($number1,$number2){
		echo "Number1 is: $number1, Number2 is: $number2";
	})->where(['number1','number2'=>"[0-9]+"]);

	Route::get('/',function(){
		echo url('admin',[125,256]);
	});
	*/

	/* Named route example using 'as' array key */

	/*
	Route::get('/admin/{number1}/{number2}',['as' => 'user-number'],function($number1,$number2){
		echo "Number1 is: $number1, Number2 is: $number2";
	})->where(['number1','number2'=>"[0-9]+"]);

	Route::get('/',function(){
		echo route('user-number',[125,256]);
		echo url('user-number',[125,256]); //Ignore while using named route
	});
	*/

	// Route::group(['middleware'],function(){
	// 	Route::get('/admin',function(){
	// 	return("This is the Admin page!!");
	// });
	// });
	
?>	 