@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Vehiculos <small><p></p></small></h1>
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
				<img src="{{asset('img/pickup.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Hola!, Bienvenido a la sección para registrar los vehiculos. Para registrar un Vehiculo debes de llenar todos los campos del siguiente formulario
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/vehiculo')}}">Vehiculos</a></li>
					<li class=""> / </a></li>
					<li class="">Nuevo Vehiculo</li>
				</ol>
			</div>
		</div>
		{!!Form::open(array('url'=>'combustible/vehiculo','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Registro de Vehiculos</h3>
			</div>

			<form role="form">
				<div class="card-body">
					<label>Marca:</label>
					<div class="group-material">
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Marca" class="material-control" placeholder="Marca" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<label for="color">Número de Pasajeros:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="NoPasajeros" value="1">
						<label for="contactChoice2">1</label>
						<input type="radio" id="contactChoice2"
						name="NoPasajeros" value="2">
						<label for="contactChoice3">2</label>
						<input type="radio" id="contactChoice3"
						name="NoPasajeros" value="3">
						<label for="contactChoice3">3</label>
						<input type="radio" id="contactChoice4"
						name="NoPasajeros" value="4">
						<label for="contactChoice3">4</label>
					</div>
					<div class="group-material">
						<label>Modelo:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Modelo" class="material-control" placeholder="Modelo" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Placas:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Placas" class="material-control" placeholder="Placas" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>
					<div class="group-material">
						<label>Color:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Color" class="material-control" placeholder="Color" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Cilindros:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Cilindros" class="material-control" placeholder="Cilindros" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Capacidad:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Capacidad" class="material-control" placeholder="Capacidad" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Combustible:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Combustible" class="material-control" placeholder="Disel/Gasolina" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<label for="color">Tarjeta de Responsable:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="TResponsabilidad" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="TResponsabilidad" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<div class="group-material">
						<label>Serie:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Serie" class="material-control" placeholder="Serie" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Responsable:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="RVehiculo" class="material-control" placeholder="Responsable del Vehiculo" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>
					<div class="group-material">
						<label>Motor:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="NoMotor" class="material-control" placeholder="No. de Motor" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>
					<div class="group-material">
						<label>Chasis:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="NoChasis" class="material-control" placeholder="No. de Chasis" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>
					<label for="color">Calcomania Vigente:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="CalVigente" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="CalVigente" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Identificación Oficial:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="IdentificadorOficial" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="IdentificadorOficial" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Piloto Fijo Asignado:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="PfAsignado" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="PfAsignado" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Seguro Vigente:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="SVigente" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="CalVigente" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Llave de Tuercas:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="KeyTuercas" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="KeyTuercas" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Tricket:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="Tricket" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="Tricket" value="No">
						<label for="contactChoice3">No</label>
					</div>
					<label for="color">Llanta de Repuesto:</label>
					<div>
						<input type="radio" id="contactChoice1"
						name="LlantaRepuesto" value="Si">
						<label for="contactChoice2">Si</label>
						<input type="radio" id="contactChoice2"
						name="LlantaRepuesto" value="No">
						<label for="contactChoice3">No</label>
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
@endsection
