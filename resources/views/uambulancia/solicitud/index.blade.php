@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Solicitudes <small><p></p></small></h1>
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
				¡Hola!, Bienvenido a la sección para registrar los Proveedores de Combustible. Para registrar un Proveedor debes de llenar todos los campos del siguiente formulario
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/solicitud/create')}}">Solicitudes</a></li>
					<li class="">Nueva Solicitud</li>
				</ol>
			</div>
		</div>
	</div>
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Proveedores</div>

	@include('combustible.proveedor.search')
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-condensed table-hover">
							<thead>
								<th>#</th>
								<th>FechaSolicitud</th>
								<th>Unidad</th>
								<th>Duracion</th>
								<th>Objetivo</th>
								<th>Responsable</th>
								<th>Telefono</th>
								<th>NoPersonas</th>
								<th>Destino</th>
								<th>FechaIni</th>
							 	<th>FechaFin</th>
								<th>HoraSalida</th>
								<th>Kilometraje</th>
								<th>Opciones</th>
							</thead>
			               @foreach ($solicitudvehiculos as $sv)
							<tr>
								<td>{{ $sv->idSolicitud}}</td>
								<td>{{ $sv->FechaSolicitud}}</td>
								<td>{{ $sv->Unidad}}</td>
								<td>{{ $sv->Duracion}}</td>
								<td>{{ $sv->Objetivo}}</td>
								<td>{{ $sv->Nombres}}</td>
								<td>{{ $sv->Telefono}}</td>
								<td>{{ $sv->NoPersonas}}</td>
								<td>{{ $sv->Destino}}</td>
								<td>{{ $sv->FechaIni}}</td>
								<td>{{ $sv->FechaFin}}</td>
								<td>{{ $sv->HoraSalida}}</td>
								<td>{{ $sv->Kilometraje}}</td>
								<td>
								</td>
							</tr>
							@endforeach
						</table>
					</div>
					{{$solicitudvehiculos->render()}}
				</div>
			</div>

		</div>

<!---->




@endsection
