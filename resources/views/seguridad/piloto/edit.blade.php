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
					<li><a href="{{url('/seguridad/piloto')}}">Pilotos</a></li>
					<li class=""> / </a></li>
					<li class="">Nuevo Piloto</li>
				</ol>
			</div>
		</div>
		{!!Form::model($piloto,['method'=>'PATCH','route'=>['seguridad.piloto.update',$piloto->idPiloto]])!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Pilotos</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">


						<div class="group-material">
							<label>Piloto:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Piloto" id="Piloto" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control" value="{{$piloto->Piloto}}" placeholder="Piloto" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

					<div class="group-material">
						<label>Direccion:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Direccion" id="Direccion" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$piloto->Direccion}}" placeholder="Dependencia" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Telefono:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Telefono" id="Telefono"class="material-control tooltips-general" value="{{$piloto->Telefono}}" placeholder="Telefono" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
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
