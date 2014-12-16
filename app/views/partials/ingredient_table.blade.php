

<script type="text/javascript">


    $(document).ready(function () {

        $('#IngredientTableContainer').jtable({
            messages: {
                addNewRecord: 'New Ingredient'
            },
            title: 'Table of Ingredients',
            actions: {
                listAction: '/ingredients?recipe_id={{ $recipe->id }}',
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
                    options: ['n/a','tsp.','tbsp.','fl. oz.','cup','pint','quart','gallon','lb.','oz.','g.']
                },
                food: {
                    title: 'Food',
                    width: '40%'
                },    
                style: {
                	title: 'Style',
                    width: '20%',
                    options: ['n/a','diced','minced','pureed','softened','cold','warm','chopped','grated','mashed']
                },
                recipe_id: {
                    list: false,
                    edit: false,
                    create: false
                }
            },
            formCreated: function(event, data)
            {

                data.form.find('input[name=food]').autocomplete({
                    source: "/../../ingredients/food",
                    minLength: 2,
                select: function(event, ui) {
                event.preventDefault();
                $('#autocomplete').val(ui.item.label);
                this.value = ui.item.label;
                $('#autocomplete_val').val(ui.item.value);
                }
                });

                data.form.find('input[name="quantity"]').addClass('validate[required,custom[number]]');
                data.form.find('input[name="food"]').addClass('validate[required,custom[onlyLetterSp]');
                data.form.validationEngine();

                
            },
            formSubmitting: function(event, data) { 
                return data.form.validationEngine('validate');
            },
            formClosed: function(event, data) {
                data.form.validationEngine('hide');
                data.form.validationEngine('detach');
            }
    });
        $('#IngredientTableContainer').jtable('load');
    });
    </script>