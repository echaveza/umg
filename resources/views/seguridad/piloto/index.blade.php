@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Pilotos <small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
		</ul>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li class="">Pilotos</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/seguridad/piloto/create')}}">Nuevo Piloto</a></li>
				</ol>
			</div>
		</div>

			@include('seguridad.piloto.search')

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>#</th>
						<th>Piloto</th>
						<th>Dependencia</th>
						<th>Teléfono</th>
						<th>Opciones</th>
					</thead>
					@foreach ($pilotos as $plt)
					<tr>
						<td>{{$plt->idPiloto}}</td>
						<td>{{$plt->Piloto}}</td>
						<td>{{$plt->Direccion}}</td>
						<td>{{$plt->Telefono}}</td>
						<td>
							<a href="{{URL::action('PilotoController@edit',$plt->idPiloto)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$plt->idPiloto}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('seguridad.piloto.modal')
					@endforeach
				</table>
				</div>
				{{$pilotos->render()}}
			</div>
	</div>
@endsection
