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
		<p>Welcome, {{ Auth::user()->first_name }}</p>
	</div>
@stop

@stop