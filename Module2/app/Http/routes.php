<?php

	Route::get('/',function(){
		return("Hello Laravel!!");
	});

	/*
	Route::get('/admin',function(){
		return("This is the Admin page!!");
	});
	*/

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

	Route::get('/admin/{number1}/{number2?}',function($number1,$number2=""){
		echo "Number1 is: $number1, Number2 is: $number2";
	});

	/* When we restrict that the value passed should be a number */

	/*
	Route::get('/admin/{number1}/{number2}',function($number1,$number2){
		echo "Number1 is: $number1, Number2 is: $number2";
	})->where(['number1','number2'=>"[0-9]+"]);
	*/

	/* When we have to call controller */

	Route::get('/admin','AdminController@index');

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

	/* Use of prefix key */

	/*Route::group(['prefix'=>'admin-panel'],function(){
		Route::get('/dashboard',[
			'as' => 'dashboard',
			'uses' => 'dashboard@index'
			]);
	});

	Route::get('/',function(){
		echo route('dashboard');
	});*/

	/*In case we have to use sub-domain*/
	
	/*Route::group(['domain'=>'{domain}'],function(){
		Route::get('/dashboard',[
			'as' => 'dashboard',
			'uses' => 'dashboard@index'
			]);
	});

	Route::get('/',function(){
		echo route('dashboard');
	});*/

	/* Nested Route group */

	/*Route::group(['prefix'=>'admin-panel'],function(){
		Route::group(['prefix'=>'subscribers'],function(){
			Route::get('/add',['as'=> 'add-sub'],function(){
				echo route("Add Subscribers");
			});
		});
	});
	Route::get('/',function(){
		echo route('add-sub');
	});*/

?>	