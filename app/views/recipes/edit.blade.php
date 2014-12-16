@extends('layouts._master')

@section('title')
	SpiceRack - Recipe - Edit - {{ $recipe->name }}
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')
    @include('partials.ingredient_table')

	<div class="col-sm-9 col-md-10 main">

    <div id="IngredientTableContainer"></div>
		<div class="container">
			<div id="addfood" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        
                        <div class="panel-title">Edit - {{ $recipe->name }}</div>
                    </div>     
                    		{{ Form::model($recipe, array('route' => array('recipes.update', $recipe->id), 'method' => 'PUT')) }}

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        {{ Form::text('name', $recipe->name, array('class' => 'form-control', 'id' => 'name')) }}                                   

                                    </div>
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::text('servings', $recipe->servings, array('class' => 'form-control', 'id' => 'servings'))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::text('prep_time', $recipe->prep_time, array('class' => 'form-control', 'id' => 'prep_time'))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::textarea('steps', $recipe->steps, array('class' => 'form-control', 'id' => 'step'))}}
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::textarea('notes', $recipe->notes, array('class' => 'form-control', 'id' => 'notes'))}}
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <br>
                                      {{ Form::submit('Save', array('class' => 'btn btn-success', 'id' => 'btn-login', 'href' => '')) }}
                                    </div>
                                </div>
                    		{{ Form::close() }} 
			</div>
                    <br>
                    <br>
                    <h4>Tags</h4>
                    @foreach ($recipe->tags as $tag)
                    {{ Form::open(array('url' => 'tags/detachtag', 'method' => 'POST', 'style'=>'display:inline-block')) }}           
                        {{ Form::hidden('tag', $tag->id, array('id' => 'tag')) }}
                        {{ Form::hidden('recipe', $recipe->id, array('id' => 'recipe')) }}                                    
                    {{Form::button('<span class="glyphicon glyphicon-remove-circle"></span>', array('type' => 'submit', 'class' => 'btn btn-danger btn-xs'))}}
                    {{ Form::close() }} 
                    {{ $tag->tag }}
                    @endforeach
                    <br>
                    {{ Form::open(array('url' => 'tags/addtag', 'method' => 'POST')) }}           
                        {{ Form::text('tag', '', array('class' => 'form-control', 'id' => 'tag', 'placeholder' => 'Add tags (seperated by commas)')) }} 
                        {{ Form::hidden('recipe', $recipe->id, array('id' => 'recipe')) }}
                        <br>                                    
                    {{ Form::submit('Add Tag', array('class' => 'btn btn-success', 'id' => 'btn-login', 'href' => '')) }}
                    {{ Form::close() }} 

			</div>
		</div>  
	</div>
@stop

@stop