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
				¡Hola! Bienvenido a la sección para registrar los vehiculos. Para registrar un Vehiculo debes de llenar todos los campos del siguiente formulario
			</div>
		</div>
	</div>


<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Vehiculos <small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
		</ul>
	</div>
	<div class="container-fluid">


			<div class="row">
				<div class="col-md-6">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Vehiculos</h3>
						</div>


							<div class="row">
								<div class="col-xs-12 lead">
									<ol class="breadcrumb">
										<li class=""> / </a></li>
										<li><a href="{{url('/combustible/vehiculo/create')}}">Nuevo Vehiculo</a></li>
									</ol>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="table-responsive">
									<table class="table table-striped table-bordered table-condesed table-hove">
										<thead>
											<th>#</th>
											<th>Vehiculo</th>
											<th>Pasajeros</th>
											<th>Modelo</th>
											<th>Capacidad</th>
											<th>Disel/Gasolina</th>
											<th>Motor</th>
											<th>Chasis</th>
											<th>Opciones</th>
										</thead>
										@foreach ($vehiculos as $veh)
										<tr>
											<td>{{$veh->idVehiculo}}</td>
											<td>{{$veh->Marca.' '.$veh->Placas}}</td>
											<td>{{$veh->NoPasajeros}}</td>
											<td>{{$veh->Modelo}}</td>
											<td>{{$veh->Capacidad}}</td>
											<td>{{$veh->Combustible}}</td>
											<td>{{$veh->NoMotor}}</td>
											<td>{{$veh->NoChasis}}</td>
											<td>
												<a href="{{URL::action('VehiculoController@edit',$veh->idVehiculo)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
												<a href="" data-target="#modal-delete-{{$veh->idVehiculo}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
											</td>
										</tr>
										@include('combustible.vehiculo.modal')
										@endforeach
									</table>
									</div>
									{{$vehiculos->render()}}
								</div>

						</div>


						</div>
					</div>

		</div>
		<div class="col-md-6">
			<div class="card card-info">
				<div class="card-header">
					<h3 class="card-title">Verificaciones</h3>
				</div>

					<div class="container-fluid">
						<div class="container-flat-form">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-condesed table-hove">
											<thead>
												<th>#</th>
												<th>Placas</th>
												<th>Calcomania Vigente</th>
												<th>Identificador</th>
												<th>Seguro</th>
												<th>Tricket</th>
												<th>LLanta de Repuesto</th>
											</thead>
											@foreach ($vehiculos as $veh)
											<tr>
												<td>{{$veh->idVehiculo}}</td>
												<td>{{$veh->Placas}}</td>
												<td>{{$veh->CalVigente}}</td>
												<td>{{$veh->IdentificadorOficial}}</td>
												<td>{{$veh->SVigente}}</td>
												<td>{{$veh->Tricket}}</td>
												<td>{{$veh->LlantaRepuesto}}</td>
											</tr>
											@include('combustible.vehiculo.modal')
											@endforeach
										</table>
									</div>
									{{$vehiculos->render()}}
								</div>

							</div>

					</div>
				</div>
			</div>
		</div>
@endsection
