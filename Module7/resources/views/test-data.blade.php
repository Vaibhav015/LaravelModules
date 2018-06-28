@extends('layout.master')
@section('content')
<p>Content loaded from test-data</p>
@for($i=1;$i<=5;$i++)
{{$i}}
@endfor
@for($j=6;$j<=10;$j++)
{{$j}}
@endfor
@section('contentextended')
<p>This data has been loaded from test-data</p>
@endsection
@endsection