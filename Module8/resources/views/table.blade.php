<table class="table table-hover">
	@foreach($data as $d)
	<thead>
		<tr>
			<th><h3>Name:</h3></th>
		</tr>
	</thead> 
	<tbody>
		<tr>
			<td>
				<p>{{$d['name']}}</p>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>