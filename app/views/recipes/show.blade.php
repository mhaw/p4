@extends('layouts._master')

@section('title')
	SpiceRack - Recipe - {{ $recipe->name }}
@stop

@section('head')



@stop

@section('content')
	@include('partials.sidenav')

	<script type="text/javascript">
    $(document).ready(function () {
        $('#IngredientTableContainer').jtable({
            title: 'Table of Ingredients',
            actions: {
                listAction: '/ingredients',
                createAction: '/ingredients/create?recipe_id={{ $recipe->id }}',
                updateAction: '/ingredients/update',
                deleteAction: '/ingredients/delete'
            },
            fields: {
                id: {
                    key: true,
                    list: false,
                },
                created_at: {
                    list: false,
                    edit: false,
                    create: false
                },
                updated_at: {
                    list: false,
                    edit: false,
                    create: false
                },
                quantity: {
                    title: 'Quantity',
                    width: '10%'
                },
                measure: {
                    title: 'Measure',
                    width: '10%',
                    options: ['tsp.','tbsp.','fl. oz.','cup','pint','quart','gallon','lb.','oz.','g.']
                },
                food_id: {
                    title: 'Food',
                    width: '60%'
                },
                style: {
                	title: 'Style',
                    width: '20%',
                    options: ['diced','minced','pureed','softened','cold','warm']
                },
                recipe_id: {
                    list: false,
                    edit: false,
                    create: false
                }
            }
        });
        $('#IngredientTableContainer').jtable('load');
    });
    </script>
    
    <script>
    $(function() {
    $("#autocomplete").autocomplete({
        source: "/../ingredients/food",
        minLength: 2,
        select: function(event, ui) {

            }
           });
 
    });
    </script>

	<div class="col-sm-9 col-md-10 main">
		<div class="container">
			<div id="recipe" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				
                <label for="autocomplete">Food Search Test: </label>
                <input id="autocomplete">

                <br>
                <br>

                <h2>{{ $recipe->name }}</h2>
				<div id="IngredientTableContainer"></div>
                <br>
        		<p>
            		<strong>Servings:</strong> {{ $recipe->servings }} <br>
            		<strong>Prep Time (in minutes):</strong> {{ $recipe->prep_time }} <br>
            		<strong>Steps:</strong> <br>
                    {{ $recipe->steps }}

        		</p>
			</div>
		</div>
	</div>
@stop

@stop