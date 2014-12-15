search.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack - Search Results
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		

		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
			<h2>Search Results</h2>
				@if ($recipes->count())
			<table class="table table-bordered table-hover">
				<thread>
					<tr>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thread>

				<tbody>
					@foreach($recipes as $recipe)
					<tr>
						<td>{{ $recipe->name }}</td>

						<td>
						<a class="btn btn-small btn-success" href="../recipes/{{ $recipe->id }}">Show</a>
                		<a class="btn btn-small btn-info" href="../recipes/{{ $recipe->id }}/edit">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No recipes found. 
		@endif
		</div>
		<div class="col-md-2 column">
		</div>


	</div>
@stop

@stop