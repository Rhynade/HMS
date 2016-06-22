@extends('layouts.app')

@section('content')

<head>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>

		<link rel="stylesheet" href="http://demo.startlaravel.com/sb-admin-laravel/assets/stylesheets/styles.css" />

		<style>
			#date    {color:#A3A09F; font-size:80%}
			#glyphicon-user { margin: 30px }
		</style>
	</head>
	<body>

		<div class="container">


			<h3>{{ $report->title }}</h3>
			<br>

			<fieldset class="form-group">
				<label for="faultyArea">Faulty Area</label>
				<textarea name="faultyArea" class="form-control" id="faultyArea" rows="1" readonly>{{ $report -> faultyArea }}</textarea>
			</fieldset>
			<fieldset class="form-group">
				<label for="description">Description</label>
				<textarea name="description" class="form-control" id="description" rows="13" readonly>{{ $report -> description }}</textarea>
			</fieldset>

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


		@endsection