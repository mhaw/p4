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
		

		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<h2>My Recipes</h2>
				@if ($recipes->count())
			<table class="table table-bordered table-hover">
				<thread>
					<tr>
						<th>Name</th>
						<th>Servings</th>
						<th>Prep Time</th>
						<th>Actions</th>
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
                		{{ Form::open(array('url' => 'recipes/' . $recipe->id, 'class' => 'pull-right')) }}
                    		{{ Form::hidden('_method', 'Delete') }}
                    		{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                		{{ Form::close() }}
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			There are no recipes. 
		@endif
		</div>
		<div class="col-md-2 column">
		</div>


	</div>
@stop

@stop 