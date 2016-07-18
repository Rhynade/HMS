@extends('layouts.app')

@section('content')

<div class="container">
	@if(Session::has('message'))
	<p class="alert alert-info">{{ Session::get('message') }}</p>
	@endif
	
	<!-- Tabs -->
	<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#A">A</a></li>
    <li><a data-toggle="pill" href="#B">B</a></li>
    <li><a data-toggle="pill" href="#C">C</a></li>
    <li><a data-toggle="pill" href="#D">D</a></li>
    <li><a data-toggle="pill" href="#E">E</a></li>
    <li><a data-toggle="pill" href="#F">F</a></li>
    <li><a data-toggle="pill" href="#G">G</a></li>
    <li><a data-toggle="pill" href="#H">H</a></li>
  	</ul>



  	<div class="tab-content">

  		<div id="A" class="tab-pane fade in active">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($A as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>


  		<div id="B" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($B as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>



  		<div id="C" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($C as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>


   		<div id="D" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($D as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>

  		<div id="E" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($E as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>

   		<div id="F" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($F as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>

   		<div id="G" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($G as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>

    		<div id="H" class="tab-pane fade">
  			<div class="table-responsive">
  				<table class="table table-hover">
  					<thead>
  						<tr>
  							<th>Room Number</th>
  							<th>Name</th>
  							<th>Points</th>
  							<th></th>
  						</tr>
  					</thead>
  					<tbody>
  						@foreach ($H as $roomdraw)
  						<?php $unit = $roomdraw -> id ?>
  						<?php $currentid = $roomdraw -> user_id ?>
  						<tr>
  							<th scope="row">{{ $roomdraw-> unit }}</th>
  							<td>{{ $roomdraw -> name }}</td>
  							<td>{{ $roomdraw -> points}}</td>
  							@if ($userid == $currentid)
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<input type="hidden" name="method" value="UNBID">
  									<button type="submit" class="btn btn-danger">Unbid</button>
  								</form>
  							</td>

  							@else
  							<td>
  								<form method="POST" action="/roomdraw">
  									<input type="hidden" name="_token" value="{{ csrf_token() }}">
  									<input type="hidden" name="id" value="{{ $unit }}">
  									<button type="submit" class="btn btn-success">Bid</button>
  								</form>
  							</td>

  							@endif

  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>


	</div>
</div>
@endsection