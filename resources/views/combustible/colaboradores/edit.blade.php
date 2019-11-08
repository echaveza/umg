@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Colaboradores<small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;"></ul>
	</div>
	<div class="container-fluid"  style="margin: 10px 100;">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<img src="{{asset('img/Colaborador.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Hola!, Bienvenido a la sección para registrar al personal que labora en la Dirección de Área de Salud. Para registrar una Empleado debes de llenar todos los campos del siguiente formulario.
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/colaboradores')}}">Colaborador</a></li>
					<li class="">Nuevo Colaborador</li>
				</ol>
			</div>
		</div>
	</div>
	{!!Form::model($colaborador,['method'=>'PATCH','route'=>['combustible.colaboradores.update',$colaborador->idColaborador]])!!}
	{{Form::token()}}
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Colaboradores</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">

					<div class="group-material">
					<span class="highlight"></span>
					<span class="bar"></span>
					<legend>Renglón y Encargada</legend>
					<select name="Unidad" class="form-control input-lg" data-toggle="tooltip" data-placement="top" title="Unidad Encargada">
					<option value="" disabled="" selected="">Selecciona una sección</option>
					@foreach ($unidades as $uni)
					<option value="{{$uni->idUnidad}}">{{$uni->NombreUnidad}}</option>
					@endforeach
					</select>
					</div>

					<div class="group-material">
						<label>Nombres:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Nombres" id="Nombres" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"class="material-control tooltips-general"value="{{$colaborador->Nombres}}"  placeholder="Nombres" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Apellidos:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Apellidos" id="Apellidos" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$colaborador->Apellidos}}"placeholder="Apellidos" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Dirección:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Direccion" id="Direccion" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$colaborador->Direccion}}" placeholder="Direccion" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Teléfono:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Telefono" class="material-control tooltips-general" value="{{$colaborador->Telefono}}"placeholder="Apellidos" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Cargo:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Cargo" id="Cargo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$colaborador->Cargo}}" placeholder="Puesto Funcional" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>


					<div class="group-material">
						<label>Renglon:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Renglon" class="material-control tooltips-general" value="{{$colaborador->Renglon}}" placeholder="Renglon Presupuestarios" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
					</div>


					<div class="group-material">
						<label>Fecha de Nacimiento:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="FechaNacimiento" class="material-control tooltips-general" value="{{$colaborador->FechaNacimiento}}" placeholder="Fecha de Nacimiento" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
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
	@endsection
