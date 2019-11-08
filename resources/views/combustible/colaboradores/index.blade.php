@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Colaboradores <small><p></p></small></h1>
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
				<img src="{{asset('img/Colaborador.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Hola! Bienvenido a la sección para registrar al personal que labora en la Dirección de Área de Salud. Para registrar una Empleado debes de llenar todos los campos del siguiente formulario.
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li class="">Colaboradores</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/colaboradores/create')}}">Nuevo Colaborador</a></li>
				</ol>
			</div>
		</div>

		<div class="container-flat-form">

			@include('combustible.colaboradores.search')
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>#</th>
						<th>Unidad</th>
						<th>Nombres</th>
						<th>Telefono</th>
						<th>Cargo</th>
						<th>Renglon</th>
						<th>Fecha de Nacimiento</th>
						<th>Opciones</th>
					</thead>
					@foreach ($colaboradores as $col)
					<tr>
						<td>{{$col->idColaborador}}</td>
						<td>{{$col->NombreUnidad}}</td>
						<td>{{$col->Nombres.' '.$col->Apellidos}}</td>
						<td>{{$col->Telefono}}</td>
						<td>{{$col->Cargo}}</td>
						<td>{{$col->Renglon}}</td>
						<td>{{$col->FechaNacimiento}}</td>

						<td>
							<a href="{{URL::action('ColaboradorController@edit',$col->idColaborador)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$col->idColaborador}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>

						</td>
					</tr>
					@include('combustible.colaboradores.modal')
					@endforeach
				</table>
				</div>
				{{$colaboradores->render()}}
			</div>

	</div>
</div>
@endsection
