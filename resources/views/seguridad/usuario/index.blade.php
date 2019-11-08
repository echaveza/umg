@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Usuarios <small><p></p></small></h1>
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
				¡Hola!, Bienvenido a la sección para registrar Usuarios. Para registrar un Usuario debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de las Unidades
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li class="">Usuario</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/unidad/create')}}">Nuevo Usuario</a></li>
				</ol>
			</div>
		</div>

			@include('seguridad.usuario.search')

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>#</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Opciones</th>
					</thead>
					@foreach ($usuarios as $usu)
					<tr>
						<td>{{$usu->id}}</td>
						<td>{{$usu->name}}</td>
						<td>{{$usu->email}}</td>
						<td>
							<a href="{{URL::action('UsuarioController@edit',$usu->id)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('seguridad.usuario.modal')
					@endforeach
				</table>
				</div>
				{{$usuarios->render()}}
			</div>
	</div>
@endsection
