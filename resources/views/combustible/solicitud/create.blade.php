@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Soliciutd <small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
		</ul>
	</div>
	<div class="container-fluid"  style="margin: 10px 100;">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<img src="{{asset('img/section.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Hola!, Bienvenido a la sección para registrar a los Proveedores de Combustible. Para registrar un Proveedor debes de llenar todos los campos del siguiente formulario.
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/proveedor')}}">Proveedores</a></li>
					<li class="">Nuevo Proveedor</li>
				</ol>
			</div>
		</div>
		{!!Form::open(array('url'=>'combustible/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Proveedores</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">

						<div class="form-group">
							<label>Solicitud:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="FechaSolicitud" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Unidad:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Unidad" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Duracion:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Duracion" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Objetivo:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Objetivo" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Responsable:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Responsable" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Telefono:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Telefono" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>NoPersonas:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="NoPersonas" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Destino:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Destino" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>FechaIni:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="FechaIni" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>FechaFin:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="FechaFin" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>HoraSalida:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="HoraSalida" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Kilometraje:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-calendar"></i></span>
								</div>
								<input type="text" name="Kilometraje" class="form-control" id="FechaNacimiento" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
							</div>
						</div>

					<div class="form-group">
						<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
						<button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
					</div>
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
<script>
function mostrarprecio() {
var Destino = document.getElementById("Destino"),
		Kmtotal = document.getElementById("Kmtotal");

Kmtotal.value = Destino.value;
}
</script>
@endsection
