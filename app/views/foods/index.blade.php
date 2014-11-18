index.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack - Foods
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<h2>All Foods</h2>

		@if ($foods->count())
			<table class="table table-striped table-bordered table-hover">
				<thread>
					<tr>
						<th>Food</th>
						<th>Type</th>
					</tr>
				</thread>

				<tbody>
					@foreach($foods as $food)
					<tr>
						<td>{{ $food->name }}</td>
						<td>{{ $food->type }}</td>
						<td>Show</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			There are no foods. 
		@endif
	</div>
@stop

@stop 