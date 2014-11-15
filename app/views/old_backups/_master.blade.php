<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	</head>
	<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SpiceRack</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">My Profile</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
<div class="row">
	<div class="col-sm-3">
      <!-- Left column -->
      <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>  
      
      <hr>
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> My Recipes <span class="badge badge-info">4</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> My Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> My Foods</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Shopping List</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </li>

      </ul>
           
      <hr>
      
  	</div><!-- /col-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
      <ul class="list-inline pull-right">
         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
      </ul>
      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
      
      	<hr>
      
		<div class="row">
           
            
          
            <!-- center left-->	
         	<div class="col-md-6">
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>**Recipe To Be Diplayed Here**</h4></div>
                  <div class="panel-body">
                    

                  </div><!--/panel-body-->
              </div><!--/panel-->
   
          	</div><!--/col-->
        	<div class="col-md-6">
				<div class="panel panel-default">
              
              	<div class="panel panel-default">
                	<div class="panel-heading">
                      	<div class="panel-title">
                  		<i class="glyphicon glyphicon-wrench pull-right"></i>
                      	<h4>Add A New Food</h4>
                      	</div>
                	</div>
                	<div class="panel-body">

                      {{ Form::open(array('url' => '/add-food', 'method' => 'POST', 'class' => 'form form-vertical')) }}
                      
                      <div class="control-group">
                          {{ Form::label('food_name','Food Name') }}
                          <div class="controls">
                          {{ Form::text('food_name', '', array('class' => 'form-control', 'placeholder' => 'Enter Food Name')); }}
                          </div>
                      </div>  

                      <div class="control-group">
                          {{ Form::label('food_type','Food Type') }}
                          <div class="controls">
                          {{ Form::select('food_type', array('Meat' => 'Meat', 'Dairy' => 'Dairy', 'Vegetable' => 'Vegetable', 'Spice' => 'Spice'), null, array('class' => 'form-control')); }}
                          </div>
                      </div> 

                      <div class="control-group">
                        {{ Form::label('','') }}
                        <div class="controls">
                      {{ Form::submit('Add', array('class' => 'btn btn-primary')); }}
                    </div>
                      </div>
                    {{ Form::close() }}
                
                
                  </div><!--/panel content-->
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      <hr>
      
      <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Discussions</strong></a>  
      
      <hr>
      
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li>
          </ul>
        </div>
      </div>
  	</div><!--/col-span-9-->
</div>
</div>
<!-- /Main -->

<footer class="text-center">Made in Durham, NC</footer>

<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" data-dismiss="modal" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->



  
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>