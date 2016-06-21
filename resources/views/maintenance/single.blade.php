@extends('layouts.app')

@section('content')

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

	<h3>Comments</h3>
	@if (isset($comments))
	<div class = "container">
		@foreach ($comments->all() as $comment)
			<p>{{ $comment-> body }}</p>
			<p>{{ $comment-> author}}</p>
		@endforeach
	</div>
	@else
		<h2> NO COMMENTS </h2>
	@endif

	<form method="POST" action="/maintenance/display/{{$report->id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ $report->id }}">
    <fieldset class="form-group">
      
		<textarea name="comment" class="form-control" placeholder="Message" rows="4"></textarea>

		<br>
		<button type="submit">Add Comment</button>
		<!-- <input style="width: 30px" type="checkbox" value="1" name="subscribe" id="subscribe" checked="checked">
		<p1><b>Notify me when new comments are added.</b></p1> -->
		</fieldset>
	</form>
</div>


@endsection