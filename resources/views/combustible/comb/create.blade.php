@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Combustible <small><p></p></small></h1>
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
					<li><a href="{{url('/combustible/combustible')}}">Combustible</a></li>
					<li class=""> / </a></li>
					<li class="">Añadir Combustible</li>
				</ol>
			</div>
		</div>
		{!!Form::open(array('url'=>'combustible/comb','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="container-flat-form">

			<form autocomplete="off">
				<div class="row">
						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="group-material">
								<label>Combustible:</label>
							<span class="highlight"></span>
							<span class="bar"></span>
							<input type="text" name="Nombre" id="Nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control" placeholder="Descripcion" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba las Unidades">
							</div>
						</div>

					<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
						<div class="group-material">
							<label>Stock:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Stock" id="Stock" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" placeholder="Stock Minimo" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la Descripcion">
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
