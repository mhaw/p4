index.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack - Recipes
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<h2>All Recipes</h2>

		@if ($recipes->count())
			<table class="table table-striped table-bordered table-hover">
				<thread>
					<tr>
						<th>Name</th>
						<th>Servings</th>
						<th>Prep Time</th>
					</tr>
				</thread>

				<tbody>
					@foreach($recipes as $recipe)
					<tr>
						<td>{{ $recipe->name }}</td>
						<td>{{ $recipe->servings }}</td>
						<td>{{ $recipe->prep_time }}</td>
						<td>
						<a class="btn btn-small btn-success" href="recipes/{{ $recipe->id }}">Show</a>
                		<a class="btn btn-small btn-info" href="recipes/{{ $recipe->id }}/edit">Edit</a>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			There are no recipes. 
		@endif
	</div>
@stop

@stop 