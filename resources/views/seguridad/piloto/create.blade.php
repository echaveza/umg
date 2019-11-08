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
					<li><a href="{{url('/seguridad/piloto')}}">Pilotos</a></li>
					<li class=""> / </a></li>
					<li class="">Nuevo Piloto</li>
				</ol>
			</div>
		</div>
		{!!Form::open(array('url'=>'seguridad/piloto','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="container-flat-form">

			<form autocomplete="off">
				<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="group-material">
								<label>Piloto:</label>
							<span class="highlight"></span>
							<span class="bar"></span>
							<input type="text" name="Piloto" id="Piloto" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control" placeholder="Nombre del Piloto" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
							</div>
						</div>

					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<div class="group-material">
							<label>Direccion:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Direccion" id="Direccion" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" placeholder="Dependencia" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="group-material">
						<label>Telefono:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Telefono" id="Telefono"  class="material-control tooltips-general" placeholder="Telefono" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
				</div>
			</div>

				<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
					<div class="form-group">
						<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
						<button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
					</div>
				</div>
					{!!Form::close()!!}
			</div>
		</div>
	</form>
</div>

@endsection
