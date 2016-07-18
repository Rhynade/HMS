@extends('layouts.app')

@section('content')
	
<div class=container>
	<table class="table table-bordered">
		<thead>
			<tr>
				
				<th>Name</th>
				<th>Room Number</th>
				<th>Title</th>
				<th>Date</th>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>{{ $username }}</td>
				<td>{{ $currentRoom }}</td>
				<td><a href="/maintenance/display/{{$re->id}}">{{ $re -> title }}</a></td>
				<td>{{ $re -> created_at -> format('Y-m-d')}}</td>
				<td>
					<form method="POST" action="/maintenance/display">
						{{ method_field('PATCH')}}

						<fieldset class="form-group">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="report" value="{{ $re->id }}">
							<select name="status" class="form-control" id="exampleSelect">
								<option value="Received" >Received</option>
								<option value="Technician Contacted" >Technician Contacted</option>
								<option value="Resolved" >Resolved</option>
							</select>
						</fieldset>
						<button type="submit" class="btn btn-success btn-sm">Save</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
</div>

@endsection