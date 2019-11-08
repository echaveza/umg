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
		{!!Form::model($vehiculo,['method'=>'PATCH','route'=>['combustible.vehiculo.update',$vehiculo->idVehiculo]])!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">


					<div class="group-material">
						<label>Marca:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Marca" class="material-control" value="{{$vehiculo->Marca}}" placeholder="Marca" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Pasajeros:</label>
					<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Pasajeros" class="material-control" value="{{$vehiculo->Pasajeros}}"placeholder="Pasajeros" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Modelo:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Modelo" class="material-control" value="{{$vehiculo->Modelo}}" placeholder="Modelo" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Placas:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Placas" class="material-control" value="{{$vehiculo->Placas}}" placeholder="Placas" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Color:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Color" class="material-control" value="{{$vehiculo->Color}}" placeholder="Color" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Cilindros:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Cilindros" class="material-control" value="{{$vehiculo->Cilindros}}" placeholder="Cilindros" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Capacidad:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Capacidad" class="material-control" value="{{$vehiculo->Capacidad}}" placeholder="Capacidad" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Combustible:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="TCombustible" class="material-control" value="{{$vehiculo->TCombustible}}" placeholder="Disel/Gasolina" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Responsable:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="TResponsabilidad" class="material-control" value="{{$vehiculo->TResponsabilidad}}"placeholder="SI/NO" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Serie:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Serie" class="material-control" placeholder="Serie" value="{{$vehiculo->Serie}}" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Tipo:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Tipo" class="material-control" placeholder="Tipo" value="{{$vehiculo->Tipo}}" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Responsable:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="RVehiculo" class="material-control" placeholder="Responsable del Vehiculo" value="{{$vehiculo->RVehiculo}}" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Motor:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="NumeroMotor" class="material-control" placeholder="No. de Motor" value="{{$vehiculo->NumeroMotor}}" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Chasis:</label>							
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="NumeroChasis" class="material-control" placeholder="No. de Chasis" value="{{$vehiculo->NumeroChasis}}" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
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
