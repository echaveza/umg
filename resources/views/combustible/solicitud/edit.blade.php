@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Unidades <small><p></p></small></h1>

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
				¡Hola!, Bienvenido a la sección para registrar las Unidades asignadas. Para registrar una Unidad debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de las Unidades
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/proveedor')}}">proveedor</a></li>
					<li class="">Nueva Unidad</li>

					<h3>Editar Categoría: {{ $proveedor->Proveedor}}</h3>
								@if (count($errors)>0)
								<div class="alert alert-danger">
									<ul>
									@foreach ($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
									</ul>
								</div>
								@endif
				</ol>
			</div>
		</div>
		{!!Form::model($proveedor,['method'=>'PATCH','route'=>['combustible.proveedor.update',$proveedor->idProveedor]])!!}
		{{Form::token()}}

		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Unidades</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">

						<div class="group-material">
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Nombre" class="material-control tooltips-general" value="{{$unidad->NombreUnidad}}" placeholder="Unidades" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba las Unidades">
						<label>Nombre</label>
						</div>

					<div class="group-material">
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Descripcion" class="material-control tooltips-general" value="{{$unidad->Descripcion}}" placeholder="Función de la Unidad" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la Descripcion">
						<label>Descripción</label>
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
</div>
</div>
</div>
@endsection
