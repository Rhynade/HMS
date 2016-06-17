@extends('layouts.app')

@section('content')
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Room Number</th>
					<th>Name</th>
					<th>Matric Number</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">A101</th>
					<td>Jonathan Chan</td>
					<td>A0128911N</td>
				</tr>
				<tr>
					<th scope="row">A102</th>
					<td>Kelly Tan</td>
					<td>A1420192Z</td>
				</tr>
				<tr>
					<th scope="row">A103</th>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
