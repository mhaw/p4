
@extends('layouts._master')

@section('title')
    SpiceRack - SignUp
@stop

@section('head')

@stop

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <div class="container">    
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            {{ Form::open(array('url' => '/signup', 'method' => 'POST', 'role' => 'form', 'id' => 'signupform', 'class' => 'form-horizontal')) }}     
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}
                                    <div class="col-md-9">
                                        {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'email address')) }}
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    {{ Form::label('first_name', 'First Name') }}
                                    <div class="col-md-9">
                                        {{ Form::text('firstname', '', array('class' => 'form-control', 'placeholder' => 'first name')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('last_name', 'Last Name') }}
                                    <div class="col-md-9">
                                        {{ Form::text('lastname', '', array('class' => 'form-control', 'placeholder' => 'last name')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('password', 'Password') }}
                                    <div class="col-md-9">
                                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'password'))}}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        {{ Form::submit('Sign Up', array('class' => 'btn btn-info', 'id' => 'btn-signup')) }}
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <a id="btn-fblogin" href="/facebook/authorize" class="btn btn-primary">Sign-up With Facebook</a>
                                    </div>                                           
                                        
                                </div>
                                
                                
                            {{ Form::close() }}    
                         </div>
                    </div>

               
                </div>

         </div> 
            </div>
         </div> 
    </div>
@stop

@stop