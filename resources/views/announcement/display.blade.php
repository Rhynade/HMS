@extends('layouts.app')

@section('content')
		
		@if (isset($announcements))
		<div class="container">
		
		@foreach ($announcements->all() as $announcement)
		<h4>{{ $announcement->title }}</h4>
			<?php $body = $announcement -> body ?>
			<div class="panel panel-default">
					<div class="panel-body">
					<p>{!! nl2br(e($body)) !!}</p>
					<br>
					<p>{{ $announcement -> username }}</p>
					<p>{{ $announcement -> created_at }}</p>
					</div>
			</div>

		@endforeach
		</div>

@else
<h1> NO ANNOUNCEMENT </h1>

@endif

@endsection
