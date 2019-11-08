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
	<div class="container-fluid"  style="margin: 10px 100;">
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
					<li><a href="{{url('/combustible/unidad')}}">Proveedores</a></li>
					<li class=""> / </li>
					<li class="">Nuevo Proveedor</li>
				</ol>
			</div>
		</div>
		{!!Form::model($proveedor,['method'=>'PATCH','route'=>['combustible.proveedor.update',$proveedor->idProveedor]])!!}
		{{Form::token()}}
			<div class="container-flat-form">
				<form autocomplete="off">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">

						<div class="group-material">
							<label>Proveedor:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Proveedor" id="Proveedor" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general"value="{{$proveedor->Proveedor}}"  placeholder="Estación de Servicio" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

						<div class="group-material">
							<label>Contacto:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Contacto" id="Contacto" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"class="material-control tooltips-general" value="{{$proveedor->Contacto}}"placeholder="Nombre y Apellido del Encargado" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

						<div class="group-material">
							<label>Dirección:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Direccion" id="Direccion" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$proveedor->Direccion}}" placeholder="Dirección de la Estación de Servicio" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

						<div class="group-material">
							<label>NIT::</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Nit" class="material-control tooltips-general" value="{{$proveedor->Nit}}" placeholder="Número de Identificación Tributaria NIT" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>


						<div class="group-material">
							<label>Teléfono:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Telefono" class="material-control tooltips-general" value="{{$proveedor->Telefono}}" placeholder="No. Telefónico del Encargado" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
						<label>Renglon</label>
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
