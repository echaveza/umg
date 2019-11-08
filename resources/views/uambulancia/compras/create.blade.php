@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Compras<small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;"></ul>
	</div>
	<div class="container-fluid"  style="margin: 10px 100;">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-3">
				<img src="{{asset('img/compra.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
				¡Bienvenido! En esta sección registraremos las compras de Disel y Gasolina. Para registrar las Compras debes de llenar todos los campos del siguiente formulario
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/compras')}}">Compras</a></li>
					<li class=""> / </li>
					<li class="">Nueva Compra</li>
				</ol>
			</div>
		</div>
	</div>


		{!!Form::open(array('url'=>'combustible/compras','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="container-flat-form">
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">

					<div class="group-material">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Estación de Servicio:</label>

					<select name="Proveedor" class="form-control  select2" data-toggle="tooltip" data-placement="top" title="Proveedor">
					<option value="" disabled="" selected2="">GASOLINERA / ESTACIÓN DE SERVICIO</option>
					@foreach ($proveedores as $prov)
					<option value="{{$prov->idProveedor}}">{{$prov->Proveedor}}</option>
					@endforeach
					</select>
					</div>

					<div class="group-material">
						<label>Tipo Comprobante:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Tipo_Comprobante" id="Tipo_Comprobante" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" placeholder="Tipo de Comprobante" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>No. Serie:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Serie_Comprobante" id="Serie_Comprobante" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" placeholder="No. Serie" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Número de Comprobante:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Numero_Comprobante" class="material-control tooltips-general" placeholder="Número de Comprobante" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Fecha:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Fecha" class="material-control tooltips-general" placeholder="Fecha de Compra" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
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
