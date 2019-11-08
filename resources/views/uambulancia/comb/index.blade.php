@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Combustible<small><p></p></small></h1>
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
					<li class="">Combustible</a></li>
					<li class=""> / </a></li>
					<li><a href="{{url('/combustible/comb/create')}}">Añadir Combustible</a></li>
				</ol>
			</div>
		</div>

			@include('combustible.comb.search')

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hove">
					<thead>
						<th>#</th>
						<th>Combustible</th>
						<th>Stock</th>
						<th>Opciones</th>
					</thead>
					@foreach ($combustibles as $comb)
					<tr>
						<td>{{$comb->idCombustible}}</td>
						<td>{{$comb->Nombre}}</td>
						<td>{{$comb->Stock}}</td>
						<td>
							<a href="{{URL::action('CombController@edit',$comb->idCombustible)}}"><button class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$comb->idCombustible}}" data-toggle="modal"><button class="btn"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('combustible.comb.modal')
					@endforeach
				</table>
				</div>
				{{$combustibles->render()}}
			</div>
	</div>
@endsection
