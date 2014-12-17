
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- jTable style -->
    <link href="{{ asset('jtable/themes/metro/darkgray/jtable.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- jTable script file -->
    <script src="{{ asset('jtable/jquery.jtable.min.js') }}" type="text/javascript"></script>
    <title>@yield('title')</title>

    <!-- jTable validation -->
    <link href="{{ asset('validationEngine/css/validationEngine.jquery.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('validationEngine/js/jquery.validationEngine.js') }}"></script>
    <script type="text/javascript" src="{{ asset('validationEngine/js/jquery.validationEngine-en.js') }}"></script>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/">SpiceRack</a>
 
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li>
      {{ Form::open(array('url' => 'recipes/search', 'method' => 'POST', 'class' => 'navbar-form navbar-left', 'role' => 'search')) }}           
      {{ Form::text('query', '', array('class' => 'form-control', 'id' => 'query')) }}                                   
      {{ Form::submit('Search', array('class' => 'btn btn-default')) }}
      {{ Form::close() }}
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li>
            @if(Auth::check())
              <a href="/logout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            @else
             <a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @endif 
      </ul>
    </div>
  </div>


</nav>

<div class="container-fluid">
          <div class="row">
        @if(Session::get('flash_message'))
        <div class='alert alert-info' role="alert">{{ Session::get('flash_message') }}<br>
        @foreach($errors->all() as $message) 
        {{ $message }}<br>
        @endforeach</div>
        @endif
    </div>

      <div class="row">
      @yield('content')
      </div>
</div>

    

    <footer class="footer">

    </footer>

  </body>
</html>