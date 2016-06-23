@extends('layouts.app')


@section('content')
	<div class="container">
		<h4><strong> Import residents particulars</strong></h4>
		<form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="file" name="import_file" />
			<button style="margin-top: 10px ; font-size: 11px;" class="btn btn-success">Import File</button>
		</form>
		<br>
		<h4><strong> Download room draw results </strong></h4>
		<a href="{{ URL::to('downloadExcel/csv') }}"><button style="margin-top: 10px ; font-size: 11px;" class="btn btn-success">Download CSV</button></a>
	</div>

@endsection
