@extends('layouts._master')

@section('title')
	SpiceRack - Tag - {{ $tag->tag }}
@stop

@section('head')



@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="recipe" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

                <br>
                <br>

                <h2>{{ $tag->tag }}</h2>
                <br>
            @if ($tag->recipes->count())
            <table class="table table-striped table-bordered table-hover">
                <thread>
                    <tr>
                        <th>Related Recipes</th>
                    </tr>
                </thread>

                <tbody>
                    @foreach($tag->recipes as $recipe)
                    <tr>
                        <td>{{ $recipe->name }}</td>
                        <td>
                        <a class="btn btn-small btn-success" href="/recipes/{{ $recipe->id }}">Show</a>
                        <a class="btn btn-small btn-info" href="/recipes/{{ $recipe->id }}/edit">Edit</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            There are no related recipes. 
        @endif

			</div>
		</div>
	</div>
@stop

@stop