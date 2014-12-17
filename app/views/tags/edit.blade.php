@extends('layouts._master')

@section('title')
	SpiceRack - Tag - Edit - {{ $tag->tag }}
@stop

@section('head')

@stop

@section('content')
	@include('partials.sidenav')

	<div class="col-sm-9 col-md-10 main">

    <div id="IngredientTableContainer"></div>
		<div class="container">
			<div id="addfood" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        
                        <div class="panel-title">Edit Tag - {{ $tag->tag }}</div>
                    </div>     
                    		{{ Form::model($tag, array('route' => array('tags.update', $tag->id), 'method' => 'PUT')) }}

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        {{ Form::text('tag', $tag->tag, array('class' => 'form-control', 'id' => 'tag')) }}                                   

                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      {{ Form::submit('Save', array('class' => 'btn btn-success', 'id' => 'btn-login', 'href' => '')) }}
                                    </div>
                                </div>
                    		{{ Form::close() }} 
			</div>
			</div>
		</div>  

	</div>
@stop

@stop