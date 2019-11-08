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
				¡Bienvenido! En esta sección registraremos las compr.as de Disel y Gasolina. Para registrar las Compras debes de llenar todos los campos del siguiente formulario
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
					<li><a href="{{url('/combustible/compras')}}">Compras</a></li>
					<li class="">Nueva Compra</li>
				</ol>
			</div>
		</div>
	</div>
	{!!Form::model($compra,['method'=>'PATCH','route'=>['combustible.compras.update',$compra->idCompra]])!!}
	{{Form::token()}}
		<div class="container-flat-form">
			<form autocomplete="off">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">

					<div class="group-material">
						<label>Estación de Servicio:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<select name="Proveedor" class="form-control input-lg" data-toggle="tooltip" data-placement="top" title="Proveedor">
					<option value="" disabled="" selected="">GASOLINERA / ESTACIÓN DE SERVICIO</option>
					@foreach ($proveedores as $prov)
					<option value="{{$prov->idProveedor}}">{{$prov->Proveedor}}</option>
					@endforeach
					</select>
					</div>

					<div class="group-material">
						<label>Serie:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Serie" id="Serie" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$compra->Serie}}" placeholder="No. de Serie" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Factura:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Factura" id="Factura" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="material-control tooltips-general" value="{{$compra->Factura}}" placeholder="No. de Factura" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Fecha de Compra:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="FechaCompra" class="material-control tooltips-general" value="{{$compra->FechaCompra}}" placeholder="Fecha de Compra" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Cantidad:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Cantidad" class="material-control tooltips-general" value="{{$compra->Cantidad}}" placeholder="Cantidad en Galones" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Descripción:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<select name="Descripcion" class="form-control input-lg" data-toggle="tooltip" data-placement="top" title="Proveedor">
					<option value="" disabled="" selected="">DESCRIPCION</option>
					<option value="GALONES GASOLINA SUPER">GALONES GASOLINA SUPER</option>
					<option value="GALONES GASOLINA REGULAR">GALONES GASOLINA REGULAR</option>
					<option value="GALONES DISEL">GALONES DISEL</option>
					<option value="GALONES ACEITE">GALONES ACEITE</option>
					<option value="OTROS">OTROS</option>
					</select>
					</div>

					<div class="group-material">
						<label>Valor:</label>
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Valor" class="material-control tooltips-general" value="{{$compra->Valor}}" placeholder="Precio" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
					</div>

					<div class="group-material">
						<label>Total:</label>	
					<span class="highlight"></span>
					<span class="bar"></span>
					<input type="text" name="Total" class="material-control tooltips-general" value="{{$compra->Total}}" placeholder="Total" required="" maxlength="50" data-toggle="tooltip" data-placement="top">
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
