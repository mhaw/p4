index.blade.php

@extends('layouts._master')

@section('title')
	SpiceRack
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="home" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    

                <br>
                <br>

                <h2>Welcome, {{ Auth::user()->first_name }}</h2>
                <p>SpiceRack is a recipe management tool that allows you to add, view, tag, search for, and edit recipes.</p>

			</div>
		</div>
	</div>
@stop

@stop