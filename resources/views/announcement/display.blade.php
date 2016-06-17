@extends('layouts.app')

@section('content')
		
		@if (isset($announcements))
		<div class="container">
		
		@foreach ($announcements->all() as $announcement)
		<h4>{{ $announcement->title }}</h4>
			<div class="panel panel-default">
					<div class="panel-body">
					<p>{{ $announcement -> body }}</p>

					<br>
					<p>{{ $announcement -> user_id }}</p>
					<p>{{ $announcement -> created_at }}</p>
					</div>
			</div>

		@endforeach
		</div>

@else
<h1> NO ANNOUNCEMENT </h1>

@endif

@endsection
