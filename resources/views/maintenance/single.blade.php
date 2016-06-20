@extends('layouts.app')

@section('content')

<div class="container">


	<h4>{{ $report->title }}</h4>

	<fieldset class="form-group">
		<label for="faultyArea">Faulty Area</label>
		<textarea name="faultyArea" class="form-control" id="faultyArea" rows="1" readonly>{{ $report -> faultyArea }}</textarea>
	</fieldset>
	<fieldset class="form-group">
		<label for="description">Description</label>
		<textarea name="description" class="form-control" id="description" rows="15" readonly>{{ $report -> description }}</textarea>
	</fieldset>
</div>

@endsection
