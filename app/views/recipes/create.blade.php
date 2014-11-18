@extends('layouts._master')

@section('title')
	SpiceRack - Add A Recipe
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="addfood" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Add A New Recipe</div>
                    </div>     
                    {{ Form::open(array('url' => 'recipes', 'method' => 'POST')) }}           
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        {{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'Give the recip e a name... ')) }}                                   

                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::text('servings', '', array('class' => 'form-control', 'id' => 'servings', 'placeholder' => 'How many people does this feed...'))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::text('prep_time', '', array('class' => 'form-control', 'id' => 'prep_time', 'placeholder' => 'How long does the recipe take the make (in minutes)...'))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::textarea('steps', '', array('class' => 'form-control', 'id' => 'step', 'placeholder' => 'Add your recipe steps here... '))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::textarea('notes', '', array('class' => 'form-control', 'id' => 'notes', 'placeholder' => 'Add some notes about the recipe... '))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        {{ Form::label('private', 'Private?') }}
                                        {{ Form::checkbox('private', 'true') }}
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      {{ Form::submit('Add Recipe', array('class' => 'btn btn-success', 'id' => 'btn-login', 'href' => '')) }}
                                    </div>
                                </div>
			</div>
			</div>
		</div>
	</div>
@stop

@stop