@extends('layout_home')

@section('contenido')

@include ('errors.mensaje_especifico', array('flash_errors' => 'flash_errors'))

<div class="widget_head">Check In</div>

<div class="widget_5">

	<div class="col-md-6 widget_1_box2">
		<div class="wid_blog">
			<h1>HUESPED</h1>
		</div>
		
		<div class="wid_blog-desc">
			<div class="wid_blog-right">
			
			<form method="post" action="{{ asset('huesped/register') }}" class="form-horizontal">

				<div class="tab-content">
					<div class="tab-pane active">
					
						<div class="form-group form-horizontal">
							<label class="col-sm-6">Tipo de Documento</label>
							<label class="col-sm-6">N&uacute;mero de Documento</label>
						</div>
						<div class="form-group form-horizontal">
							<div class="col-sm-6">
							<select id="type_document_id" name="type_document_id" class="form-control">
								<option value="0">Seleccione...</option>
								<option value="1">Cedula de Identidad</option>
								<option value="2">Compañia</option>
							</select>
							</div>
							<div class="col-sm-6">
								<input type="text" id="dni" name="dni" @if (empty($guest)) value="" @endif @if (!empty($guest)) value="{{ $guest->dni }}" @endif class="form-control">
							</div>
						</div>
						
					</div>
				</div>
				
				<!-- FORMULARIO HUESPED -->
				<div id="huesped" class="tab-content">
					<div class="tab-pane" id="horizontal-form">
						
						<div class="form-group">
							<label class="col-sm-2">Titulo</label>
							<label class="col-sm-5">Nombres</label>
							<label class="col-sm-5">Apellidos</label>
						</div>
						<div class="form-group">
							<div class="col-sm-2">
							<select id="type" name="type" class="form-control">
								<option value="n/a">N/A</option>
								<option value="miss">Miss</option>
								<option value="mr">Mr.</option>
								<option value="mrs">Mrs.</option>
							</select>
							</div>
							<div class="col-sm-5">
								<input type="text" id="name" name="name" class="form-control" >
							</div>
							<div class="col-sm-5">
								<input type="text" id="last_name" name="last_name" class="form-control" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-6">Sexo</label>
							<label class="col-sm-6">Fecha de Nacimiento</label>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<div class="checkbox">
									<label>
										<input type="checkbox" id="gender1" name="gender" value="female" >
										Femenino
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" id="gender2" name="gender" value="male" >
										Masculino
									</label>
								</div>
							</div>	
							<div class="col-sm-6">
								<div id="fecha_birth" class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
									<input type="text" id="date_of_birth" name="date_of_birth" class="form-control" placeholder="yyyy-mm-dd" />
									<span id="span_fecha" class="input-group-addon add-on">
										<span class="glyphicon glyphicon-calendar"></span>
				                	</span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-6">Ocupaci&oacute;n</label>
							<label class="col-sm-6">Correo Electr&oacute;nico</label>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<input type="text" id="occupation" name="occupation" class="form-control" >
							</div>
							<div class="col-sm-6">
								<input type="text" id="email" name="email" class="form-control" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-6">Tipo de Tel&eacute;fono</label>
							<label class="col-sm-6">N&uacute;mero de Tel&eacute;fono</label>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
							<select id="type_telephone" name="type_telephone" class="form-control">
								<option value="1">Movil</option>
								<option value="2">Residencial</option>
							</select>
							</div>
							<div class="col-sm-6">
								<input type="text" id="number_telephone" name="number_telephone" class="form-control" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-12">Direcci&oacute;n</label>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input type="text" id="address" name="address" class="form-control" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-4">Pa&iacute;s</label>
							<label class="col-sm-4">Estado</label>
							<label class="col-sm-4">Ciudad</label>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
							<select id="countries_id" name="countries_id" class="form-control">
								@foreach ($countries as $filas)
								<option value="{{ $filas->id }}">{{ $filas->name }}</option>
								@endforeach
							</select>
							</div>
							<div class="col-sm-4">
							<select id="states_id" name="states_id" class="form-control">
								@foreach ($states as $filas)
								<option value="{{ $filas->id }}">{{ $filas->name }}</option>
								@endforeach
							</select>
							</div>
							<div class="col-sm-4">
							<select id="city_id" name="city_id" class="form-control">
								@foreach ($cities as $filas)
								<option value="{{ $filas->id }}">{{ $filas->name }}</option>
								@endforeach
							</select>
							</div>
						</div>
						
						<div class="form-group">
							<div class="float-right btn-group">
								<input type="submit" id="procesar" name="procesar" value="Registrar" class="btn-success btn">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</div>
						</div>
						
					</div>
				</div>
				<!-- FINAL FORMULARIO HUESPED -->
			</form>
			
			</div>
		</div>
	</div>
	
	<div class="col-md-6 widget_1_box2">
		<div class="wid_blog">
			<h1>RESERVAS</h1>
		</div>
		
		<div class="wid_blog-desc">
			<div class="wid_blog-right">
				
				<div class="tab-content">
					<div class="tab-pane active">
					
					<form id="form-reservas" action="" class="form-horizontal">
					<div class="form-group">
						<label class="col-sm-2">Fecha Ent.:</label>
						<div class="col-sm-4">
							<div id="" class="input-group" data-date="" data-date-format="yyyy-mm-dd">
								<input type="text" name="checkin_date" class="form-control date" value="{{ date('d-m-Y') }}" />
								<span class="input-group-addon add-on">
									<span class="glyphicon glyphicon-calendar"></span>
			                	</span>
							</div>
						</div>
						<label class="col-sm-2">Fecha Sal.:</label>
						<div class="col-sm-4">
							<div id="fecha2" class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
								<input type="text" id="checkout_date" name="checkout_date" class="form-control add-on" value="{{ date('d-m-Y') }}" />
								<span class="input-group-addon add-on">
									<span class="glyphicon glyphicon-calendar"></span>
			                	</span>
							</div>
						</div>
						<!--  <button type="submit" id="registrar-reservas" class="pull-right btn btn-primary glyphicon glyphicon-search"></button> -->
						<a id="registrar-reservas" href="#" title="Nueva Reserva"><span class="badge"><span class="glyphicon glyphicon-search"></span></span></a>
					</div>
					</form>
					
					</div>
				</div>
				
			</div>
			
			<div class="clearfix"></div>

			<br />
			
			<div id="rooms-reservas" class="tab-content">
				<div class="tab-pane">
				
					<div class="list-group">
						<a class="list-group-head">
							<div class="row text-center">
								<div class="col-sm-8">HABITACIONES</div>
								<div class="col-sm-4">ACCIONES</div>
							</div>
						</a>
						
						<div class="media">
							<div class="media-left">
							    <a href="#">
							      <img class="img-thumbnail" src="{{ asset('imagenes/habitaciones/hab1.png') }}" alt="...">
							    </a>
							</div>
							<div class="media-body">
								<div class="col-sm-8">
							    	<p>Nombre Hab.:</p> 
							    	<p>Descripci&oacute;n: </p>
							    	<p>N&uacute;mero M&iacute;nimo | Numero M&aacute;ximo</p>
							    </div>
							    
							    <form id="form-rooms-quantity" action="" class="form-inline">
							    	<label class="col-sm-2 control-label text-right">Cantidad:</label>
									<div class="col-sm-2">
										<select name="ciudad" class="form-control">
											<option value=""></option>
										</select>
									</div>
									<div class="btn-group">
										<input type="submit" id="procesar" name="procesar" value="Registrar" class="btn-success btn">
									</div>
								</form>
							</div>
						</div>
						
					</div>
				
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection