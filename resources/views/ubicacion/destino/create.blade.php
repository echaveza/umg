@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Departamento <small><p></p></small></h1>
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
					<li><a href="{{url('/ubicacion/departamento')}}">Departamentos</a></li>
					<li class=""> / </a></li>
					<li class="">Agregar Departamentos</li>
				</ol>
			</div>
		</div>
		{!!Form::open(array('url'=>'ubicacion/destino','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Registro de Destinos</h3>
			</div>

			<form role="form">
					<div class="group-material">
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Departamento" class="material-control" placeholder="Departamento" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

						<div class="group-material">
							<span class="highlight"></span>
							<span class="bar"></span>
							<input type="text" name="Municipio" class="material-control" placeholder="Municipio" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

						<div class="group-material">
							<span class="highlight"></span>
							<span class="bar"></span>
							<input type="text" name="Aldea" class="material-control" placeholder="Aldea" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

					<div class="group-material">
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Kmtotal" class="material-control" placeholder="Kmtotal" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
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
