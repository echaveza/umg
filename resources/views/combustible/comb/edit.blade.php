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
					<li><a href="{{url('/combustible/comb')}}">Combustible</a></li>
					<li class="">Añadir Combustible</li>
				</ol>
			</div>
		</div>
		{!!Form::model($combustible,['method'=>'PATCH','route'=>['combustible.comb.update',$combustible->idCombustible]])!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Combustible</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">


						<div class="group-material">
							<label>Combustible:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Nombre" id="Nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control" value="{{$combustible->Nombre}}" placeholder="Nombre" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
						</div>

					<div class="group-material">
						<label>Stock:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Stock" id="Stock" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$combustible->Stock}}" placeholder="Stock" required="" maxlength="70" data-toggle="tooltip" data-placement="top">
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
