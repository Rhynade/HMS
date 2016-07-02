@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ asset('styles.css') }}">
	<style>
		#date    {color:#A3A09F; font-size:80%}

	</style>
</head>
<body>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">{{ $report->title }}</h3>

			</div>
			<div class="panel-body">
				<p id="date">{{ date('F d, Y', strtotime($report->created_at)) }} at {{ date('h:i A', strtotime($report->created_at))}}</p>
				<p id="date">Faulty Area: {{ $report -> faultyArea }} </p>
				<br>
				{!! $report -> description !!}

			</div>
		</div>

		<div class="panel panel-default">

			<div class="panel-heading">
				<h3 class="panel-title">Comments</h3>

			</div>

			@if (isset($comments))
			<?php $author1 = $report -> name ?>
			<?php $author2 = 'admin' ?>
			@foreach ($comments->all() as $comment)
			<div class="panel-body">
				<ul class="chat">
					@if($comment->author==$author2)


					<!-- /.panel-heading -->

					<li class="left clearfix">
						<span class="chat-img pull-left">
							<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
						</span>
						<div class="chat-body clearfix">
							<div class="header">
								<strong class="primary-font">{{$comment->author}}</strong>
								<small class="pull-right text-muted">
									<i class="fa fa-clock-o fa-fw"></i> {{ date('F d, Y', strtotime($comment->created_at)) }} at {{ date('h:i A', strtotime($comment->created_at)) }}
								</small>
							</div>
							<p>
								{{$comment->body}}
							</p>
						</div>
					</li>
					@else
					<li class="right clearfix">
						<span class="chat-img pull-right">
							<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />

						</span>
						<div class="chat-body clearfix">
							<div class="header">
								<small class=" text-muted">
									<i class="fa fa-clock-o fa-fw"></i> {{ date('F d', strtotime($comment->created_at)) }} at {{ date('h:i A', strtotime($comment->created_at)) }}</small>
									<strong class="pull-right primary-font">{{$comment->author}}</strong>
								</div>
								<p>
									{{$comment->body}}
								</p>
							</div>
						</li>

						@endif
					</ul>
				</div>
				@endforeach

				@else 

				@endif
			</div>

			<form method="POST" action="/maintenance/display/{{$report->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{ $report->id }}">

				<fieldset class="form-group">

					<textarea name="comment" class="form-control" placeholder="Message" rows="4"></textarea>

					<br>
					<button type="submit" class="btn btn-success">Add Comment</button>

				</fieldset>
			</form>

		</div>
	</body>
	</html>


	@endsection