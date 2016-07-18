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
				<th>Date</th>
				<th>Status</th>
			</tr>
		</thead>
		
		@foreach ($reports->all() as $report)
		<tbody>
			<tr>
				
				<td>{{ $report-> username }}</td>
				<td>{{ $report -> currentRoom }}</td>
				<td><a href="/maintenance/display/{{$report->id}}">{{ $report -> title }}</a></td>
				<td>{{ $report -> created_at -> format('Y-m-d')}}</td>
				
				 @if(Auth::user()->role_id==7)
				<td>{{ $report->status }}<a href="/maintenance/{{$report->id}}" class="pull-right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

				</td>
				@else
				<td>{{ $report->status}}</td>

				@endif
			</tr>
		</tbody>

		@endforeach
	</table>

	@else
	<h1> No Maintenance Report. </h1>
</div>

@endif

@endsection
