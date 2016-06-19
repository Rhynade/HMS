@extends('layouts.app')

@section('content')

<div class="container">	
	<h1> Maintenance Report Received </h1>
	<br>
	<a href="{{ url('/maintenance/display') }}" class="btn btn-primary btn-lg active" role="button">View</a>
</div>

@endsection
