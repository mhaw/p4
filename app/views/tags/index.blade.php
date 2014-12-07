index.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack - Tags
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column">
		<h2>My Tags</h2>

		@if ($tags)
			<table class="table table-striped table-bordered table-hover">
				<thread>
					<tr>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thread>

				<tbody>
					@foreach($tags as $tag)
					<tr>
						<td>{{ $tag->tag }}</td>
						<td>
						<a class="btn btn-small btn-success" href="tags/{{ $tag->id }}">Show</a>
                		<a class="btn btn-small btn-info" href="tags/{{ $tag->id }}/edit">Edit</a>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a class="btn btn-small btn-alert" href="tags/create">Add A Tag</a>
		@else
			There are no tags. 
		@endif
		</div>
		<div class="col-md-2 column">
		</div>
	</div>
@stop

@stop 