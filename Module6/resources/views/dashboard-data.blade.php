@extends('layout.master')
@section('content')
<p>Content loaded</p>
	<!-- {{$data}} --> <!-- Doesn't execute the code whether it's a tag or a script -->
		 {!!$data!!} <!-- Execute the code whether it's a tag or a script -->
	<!-- {!! $data or 'Not Available' !!} --> <!-- If we doesn't pass any value then it will show Not Available -->
	<!-- {!! isset($data) ? $data : 'Not Available' !!} --> <!-- Alternative method -->
@endsection