@extends ('layouts.admin')
@section ('contenido')

<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<div class="page-header">
			<h1 class="all-tittles">Destino <small><p></p></small></h1>
		</div>
	</div>
</div>
	<div class="conteiner-fluid">
		<ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
		</ul>
	</div>
	<div class="container-fluid">


		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Destinos</h3>
						</div>
						<form role="form">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-condesed table-hove">
										<thead>
											<th>#</th>
											<th>Destino</th>
											<th>Kilometraje</th>
										</thead>
										@foreach ($destinos as $des)
										<tr>
											<td>{{$des->idDestino}}</td>
											<td>{{$des->Destino}}</td>
											<td>{{$des->Kmtotal}}</td>
										</tr>
										@endforeach
									</table>
									</div>
									{{$destinos->render()}}
								</div>




							</form>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title">Horizontal Form</h3>
              </div>
							<form class="form-horizontal">

								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-condesed table-hove">

										</table>
										</div>
									</div>




              </form>
            </div>

          </div>
        </div>
      </div>
		</div>
@endsection
