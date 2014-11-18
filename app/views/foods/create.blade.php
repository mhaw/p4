@extends('layouts._master')

@section('title')
	SpiceRack - Add A Food
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
                        <div class="panel-title">Add New Food</div>
                    </div>     
                    {{ Form::open(array('url' => 'foods', 'method' => 'POST')) }}           
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        {{ Form::text('name', '', array('class' => 'form-control', 'id' => 'food_name', 'placeholder' => 'name')) }}                                   

                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                        {{ Form::text('type', '', array('class' => 'form-control', 'id' => 'food_type', 'placeholder' => 'type'))}}
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      {{ Form::submit('Add Food', array('class' => 'btn btn-success', 'id' => 'btn-login', 'href' => '')) }}
                                    </div>
                                </div>
			</div>
			</div>
		</div>
	</div>
@stop

@stop