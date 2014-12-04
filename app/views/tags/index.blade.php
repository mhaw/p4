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
		<h2>All Tags</h2>

		@if ($tags->count())
			<table class="table table-striped table-bordered table-hover">
				<thread>
					<tr>
						<th>Name</th>
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
@stop

@stop 