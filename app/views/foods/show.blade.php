@extends('layouts._master')

@section('title')
	SpiceRack - Food - {{ $food->name }}
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="food" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<h2>{{ $food->name }}</h2>
        		<p>
            		<strong>Type:</strong> {{ $food->type }}
        		</p>
			</div>
		</div>
	</div>
@stop

@stop