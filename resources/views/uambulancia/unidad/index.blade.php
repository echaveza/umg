@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Unidades <small><p></p></small></h1>
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
					<li class="">Unidades</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/unidad/create')}}">Nueva Unidad</a></li>
				</ol>
			</div>
		</div>

			@include('combustible.unidad.search')

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>Id</th>
						<th>Unidad</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</thead>
					@foreach ($unidades as $unid)
					<tr>
						<td>{{$unid->idUnidad}}</td>
						<td>{{$unid->NombreUnidad}}</td>
						<td>{{$unid->Descripcion}}</td>
						<td>
							<a href="{{URL::action('UnidadController@edit',$unid->idUnidad)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$unid->idUnidad}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('combustible.unidad.modal')
					@endforeach
				</table>
				</div>
				{{$unidades->render()}}
			</div>
	</div>
@endsection
