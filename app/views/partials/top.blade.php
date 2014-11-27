
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">SpiceRack</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
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