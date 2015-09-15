<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Admin Login</title>
  <link rel="stylesheet" href="{!! asset('assets/css/admin/style.css') !!}">
  
</head>
<body>
	{!! Form::open(array('url' => 'login','class'=>'login')) !!}
	<p>
  	{!! $errors->first('email') !!}
  	{!! $errors->first('password') !!}
	</p>

  <p>
    {!! Form::label('login', 'Email') !!}
  	{!! Form::text('login', Input::old('email'), array('placeholder' => 'admin', 'id' => 'login')) !!}
  </p>

  <p>
  	{!! Form::label('password', 'Password') !!}
  	{!! Form::password('password',array('id' => 'password')) !!}
  </p>

  <p class="login-submit">
    {!! Form::button('Login!',array('class' => 'login-button', 'type' => 'submit')) !!}
  </p>

  <p class="forgot-password"><a href="index.html">Forgot your password?</a></p>
  {!! Form::close() !!}


</body>
</html>