@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<style>
		#date    {color:#A3A09F; font-size:80%}
		#delete {
			margin-right: 10px;
		}

	</style>
</head>
<body>

	@if (isset($announcements))
	<div class="container">

		@foreach ($announcements->all() as $announcement)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					{{ $announcement->title }}

					@if(Auth::user()->role_id==7)
					<a href="/announcement/{{$announcement->id}}/edit" class="pull-right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="/announcement/{{$announcement->id}}/delete" class="pull-right"><span id="delete" class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

					@else

					@endif
				</h3>
			</div>
			<div class="panel-body">
				<p id="date">{{ date('F d, Y', strtotime($announcement->created_at)) }} at {{ date('h:i A', strtotime($announcement->created_at))}}</p>
				{!! $announcement->body !!}
				<br>
				<p><em>{{ $announcement -> username }}</em></p>

			</div>
		</div>

		@endforeach
	</div>
</body>

@else
<h1> NO ANNOUNCEMENT </h1>


@endif

@endsection
