<?php
	
	Route::controller('admin','AdminController');

	/* Passing data to view */

	Route::get('/',function(){
		return view('test-data');
	});

	Route::get('/data',function(){
		$data = ['vaibhav','sudhanshu'];
		//return view('array-data',compact('data'));
		//return view('array-data',['data'=>$data]);
		//return view('array-data')->with('data', $data);
		return view('array-data')->withNames($data);//Names 'N' should be capital
	});
?>