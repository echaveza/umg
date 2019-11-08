<body>
	{!! Form::open(array('url'=>'ubicacion/departamento','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<form>
  <input type="text" name="searchText" name="search" placeholder="Search..">
</form>
{{Form::close()}}
</body>
