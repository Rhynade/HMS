@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>

	<style>
		#date    {color:#A3A09F; font-size:80%}
	</style>
</head>
<body>

@if (isset($announcements))
<div class="container">

	@foreach ($announcements->all() as $announcement)
	<?php $body = $announcement -> body ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{ $announcement->title }}</h3>

		</div>
		<div class="panel-body">
			<p id="date">{{ date('F d, Y', strtotime($announcement->created_at)) }} at {{ date('h:i A', strtotime($announcement->created_at))}}</p>
			<p>{!! nl2br(e($body)) !!}</p>
			<br>
			<p>{{ $announcement -> username }}</p>
			
		</div>
	</div>

	@endforeach
</div>
</body>

@else
<h1> NO ANNOUNCEMENT </h1>


@endif

@endsection
