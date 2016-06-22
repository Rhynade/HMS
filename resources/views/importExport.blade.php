@extends('layouts.app')


@section('content')
	<div class="container">
		<form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="file" name="import_file" />
			<button style="margin-top: 10px ; font-size: 11px;" class="btn btn-success">Import File</button>
		</form>
	</div>

@endsection
