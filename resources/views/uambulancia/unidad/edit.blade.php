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
					<li><a href="{{url('/combustible/unidad')}}">Unidades</a></li>
					<li class="">Nueva Unidad</li>
				</ol>
			</div>
		</div>
		{!!Form::model($unidad,['method'=>'PATCH','route'=>['combustible.unidad.update',$unidad->idUnidad]])!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<div class="title-flat-form title-flat-blue">Registro de Unidades</div>
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">


						<div class="group-material">
							<label>Unidad:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="NombreUnidad" id="NombreUnidad" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control" value="{{$unidad->NombreUnidad}}" placeholder="Unidades" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escriba las Unidades">
						</div>

					<div class="group-material">
						<label>Descripcion:</label>
						<span class="highlight"></span>
						<span class="bar"></span>
						<input type="text" name="Descripcion" id="Descripcion" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$unidad->Descripcion}}" placeholder="Función de la Unidad" required="" maxlength="70" data-toggle="tooltip" data-placement="top" title="Escribe la Descripcion">
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
