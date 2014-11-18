index.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack - Ingredients
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<h2>All Ingredients</h2>

		@if ($ingredients->count())
			<table class="table table-striped table-bordered table-hover">
				<thread>
					<tr>
						<th>Food</th>
						<th>Type</th>
					</tr>
				</thread>

				<tbody>

					@foreach($ingredients as $ingredient)
					<tr>
						<td>{{ $ingredient->quantity }}</td>
						<td>{{ $ingredient->measure }}</td>
						<td>{{ $ingredient->food->name }}</td>
						<td>{{ $ingredient->style }}</td>
						<td>Show</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			There are no ingredients. 
		@endif
	</div>
@stop

@stop 