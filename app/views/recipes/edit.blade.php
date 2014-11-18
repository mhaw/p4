@extends('layouts._master')

@section('title')
	SpiceRack - Food - Edit - {{ $food->name }}
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
                        <div class="panel-title">Edit - {{ $food->name }}</div>
                    </div>     
                    		{{ Form::model($food, array('route' => array('foods.update', $food->id), 'method' => 'PUT')) }}
                             <!-- {{ Form::hidden('id',$food['id']) }} -->

                            <div style="margin-bottom: 15px" class="input-group">
                                        {{ Form::label('Name','Name') }}
										{{ Form::text('name', $food['name'], array('class' => 'form-control')); }}
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        {{ Form::label('Type','Type') }}
										{{ Form::text('type', $food['type'], array('class' => 'form-control')); }}
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      {{ Form::submit('Save', array('class' => 'btn btn-success')); }}
                                    </div>
                                </div>
                    		{{ Form::close() }} 
			</div>
			</div>
		</div>
	</div>
@stop

@stop