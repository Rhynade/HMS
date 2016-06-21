@extends('layouts.app')

@section('content')

<div class="container">
	@if(Session::has('message'))
	<p class="alert alert-info">{{ Session::get('message') }}</p>
	@endif
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Room Number</th>
					<th>Name</th>
					<th>Points</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($roomdraws->all() as $roomdraw)
				<?php $unit = $roomdraw -> id ?>
				<?php $currentid = $roomdraw -> user_id ?>
				<tr>
					<th scope="row">{{ $roomdraw-> unit }}</th>
					<td>{{ $roomdraw -> name }}</td>
					<td>{{ $roomdraw -> points}}</td>
					@if ($userid == $currentid)
					<td>
						<form method="POST" action="/roomdraw">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $unit }}">
						<input type="hidden" name="method" value="UNBID">
						<button type="submit" class="btn btn-danger">Unbid</button>
						</form>
					</td>

					@else
					<td>
						<form method="POST" action="/roomdraw">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $unit }}">
						<button type="submit" class="btn btn-success">Bid</button>
						</form>
					</td>

					@endif

				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

