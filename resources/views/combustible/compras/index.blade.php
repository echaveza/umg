@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Compra <small><p></p></small></h1>
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
					<li class="">Compras</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/compras/create')}}">Nueva Compra</a></li>
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
						<th>Proveedor</th>
						<th>Tipo_Comprobante</th>
						<th>Serie_Comprobante</th>
						<th>Numero_Comprobante</th>
						<th>Fecha</th>
						<th>Opciones</th>
					</thead>
					@foreach ($compras as $cmps)
					<tr>
						<td>{{$cmps->idCompra}}</td>
						<td>{{$cmps->Proveedor}}</td>
						<td>{{$cmps->Tipo_Comprobante}}</td>
						<td>{{$cmps->Serie_Comprobante}}</td>
						<td>{{$cmps->Numero_Comprobante}}</td>
						<td>{{$col->Fecha}}</td>
						<td>
							<a href="{{URL::action('CompraController@edit',$cmps->idCompra)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$cmps->idCompra}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>

						</td>
					</tr>
					@include('combustible.compras.modal')
					@endforeach
				</table>
				</div>
				{{$compras->render()}}
			</div>

	</div>
</div>
@endsection
