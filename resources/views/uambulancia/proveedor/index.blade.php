@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Proveedores <small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
		</ul>
	</div>
	<div class="container-fluid"  style="margin: 100px 100;">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<img src="{{asset('img/proveedores.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Hola! Bienvenido a la sección para registrar a los Proveedores de Combustible. Para registrar un Proveedor debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de los mismos
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li class="">Proveedores</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/proveedor/create')}}">Nuevo Proveedor</a></li>
				</ol>
			</div>
		</div>

		<div class="container-flat-form">


			@include('combustible.proveedor.search')

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>Id</th>
						<th>Proveedor</th>
						<th>Contacto</th>
						<th>Direccion</th>
						<th>Nit</th>
						<th>Telefono</th>
						<th>Opciones</th>
					</thead>
					@foreach ($proveedores as $prov)
					<tr>
						<td>{{$prov->idProveedor}}</td>
						<td>{{$prov->Proveedor}}</td>
						<td>{{$prov->Contacto}}</td>
						<td>{{$prov->Direccion}}</td>
						<td>{{$prov->Nit}}</td>
						<td>{{$prov->Telefono}}</td>
						<td>
							<a href="{{URL::action('ProveedorController@edit',$prov->idProveedor)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$prov->idProveedor}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('combustible.proveedor.modal')
					@endforeach
				</table>
				</div>
				{{$proveedores->render()}}
			</div>

	</div>


</div>
@endsection
