@extends('layouts._master')

@section('title')
	SpiceRack - Recipe - {{ $recipe->name }}
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="recipe" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<h2>{{ $recipe->name }}</h2>
        		<p>
            		<strong>Servings:</strong> {{ $recipe->servings }} <br>
            		<strong>Prep Time (in minutes):</strong> {{ $recipe->prep_time }} <br>
            		<strong>Steps:</strong> {{ $recipe->steps }}

        		</p>
			</div>
		</div>
	</div>
@stop

@stop