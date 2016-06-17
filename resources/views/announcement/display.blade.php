@extends('layouts.app')

@section('content')
	
	@if (isset($announcements))
	<ul>
	@foreach ($announcements->all() as $announcement)
		<li>{{ $announcement->body }}</li>
	@endforeach
	</ul>

	@else
	<h1> NO ANNOUNCEMENT </h1>

	@endif

@endsection