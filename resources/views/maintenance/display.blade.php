@extends('layouts.app')

@section('content')

<div class="container">
	@if (isset($reports))

	<table class="table table-bordered">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Room Number</th>
				<th>Title</th>
				<th>Faulty Area</th>
				<th>Description</th>
				<th>Date</th>
			</tr>
		</thead>
		
		@foreach ($reports->all() as $report)
		<tbody>
			<tr>
				
				<td>{{ $report-> username }}</td>
				<td>{{ $report -> currentRoom }}</td>
				<td>{{ $report -> title }}</td>
				<td>{{ $report -> faultyArea }}</td>
				<td>{{ $report -> description }}</td>
				<td>{{ $report -> created_at }}</td>
			</tr>
		</tbody>

		@endforeach
	</table>

	@else
	<h1> No Maintenance Report. </h1>
</div>

@endif

@endsection
