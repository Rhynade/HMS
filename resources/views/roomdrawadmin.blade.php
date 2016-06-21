@extends('layouts.app')

@section('content')

<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Room Number</th>
					<th>Name</th>
					<th>Points</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($roomdraws->all() as $roomdraw)
				<tr>
					<th scope="row">{{ $roomdraw-> unit }}</th>
					<td>{{ $roomdraw -> name }}</td>
					<td>{{ $roomdraw -> points }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection