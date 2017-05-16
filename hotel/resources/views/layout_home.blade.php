<!DOCTYPE HTML>
<html>
<head>
<title>Mituannia Ventures, SAS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{ asset('css/style_gral.css') }}" rel='stylesheet' type='text/css' />

<!-- Graph CSS -->
<link href="{{ asset('css/lines.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type='text/css' /> 

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">

<!-- datetimepicker CSS -->
<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css" />

<!-- Datetimepicker JS -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/bootstrap-timepicker.js') }}"></script>

<!-- Bootstrap Select CSS -->
<link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />

<!-- Bootstrap Select JS -->
<script src="{{ asset('js/bootstrap-select.js') }}"></script>


<!-- fileStyle JS -->
<script src="{{ asset('js/bootstrap-filestyle.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/metisMenu.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Graph JavaScript -->
<script src="{{ asset('js/d3.v3.js') }}"></script>
<script src="{{ asset('js/rickshaw.js') }}"></script>

<!-- Archivo para la definicion de los campos de fechas -->
<script src="{{ asset('js/fechas_horas.js') }}"></script>

<!-- Archivo implementar select dinamicos -->
<script src="{{ asset('js/utilidades/select_dinamicos.js') }}"></script>
<script src="{{ asset('js/utilidades/funciones.js') }}"></script>

</head>
<body>

<div id="wrapper">
     <!-- Navigation -->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ asset("/") }}">ROCK, HOTEL</a>
		</div>
	</nav>
        
	<div class="graphs">
		@yield('contenido')
	</div>
</div>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>