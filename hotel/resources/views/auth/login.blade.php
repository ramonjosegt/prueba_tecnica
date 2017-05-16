<!DOCTYPE html>
<html>
<head>
<title>APTCA - COORD. RR.HH</title>
<link href="{{ asset('css/style_login.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="APTCA, Aptca, Azucarera Pio Tamayo, Pio Tamayo, Recursos Humanos, rr.hh, rrhh, Azucar"/>

<!--webfonts--
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>

<!--start-login-one-->
<div class="login">	
	<div class="ribbon-wrapper h2 ribbon-red">
		<div class="ribbon-front">
			<h2>APTCA, CA</h2>
		</div>
		<div class="ribbon-edge-topleft2"></div>
		<div class="ribbon-edge-bottomleft"></div>
	</div>
	
	<form method="post" action="auth/login">
	<ul>
		<li>
			<input name="email" type="text" class="text" value="Dirección de correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Dirección de correo';}" ><a href="#" class=" icon user"></a>
		</li>
		<li>
			<input name="password" type="password" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}"><a href="#" class=" icon lock"></a>
		</li>
	</ul>
	<div class="submit">
		<input type="submit" value="Ingresar">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</div>
	</form>
</div>

<!--start-copyright-->
<div class="copy-right">
	<!--<p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>-->
</div>
<!--end-copyright-->
</body>
</html>