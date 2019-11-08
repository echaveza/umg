<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Unidad;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\UnidadFormRequest;
use DB;

class UnidadController extends Controller
{
  public function __construct()
  {
    //$this->middleware('auth');
  }
    public function index(Request $request)
    {
      if ($request)
        {
            $query=trim($request->get('searchText'));
            $unidades=DB::table('unidad')->where('NombreUnidad','LIKE','%'.$query.'%')
            ->where ('Estado','=','1')
            ->orderBy('idUnidad','desc')
            ->paginate(5);
            return view('combustible.unidad.index',["unidades"=>$unidades,"searchText"=>$query]);
        }
    }
    public function create()
    {   //dd("hola");
        return view("combustible.unidad.create");
    }
    public function store (UnidadFormRequest $request)
    {
        //dd($request);
        $unidad=new Unidad;
        $unidad->NombreUnidad=$request->get('NombreUnidad');
        $unidad->Descripcion=$request->get('Descripcion');
        $unidad->Estado='1';
        $unidad->save();
        return Redirect::to('combustible/unidad');
    }
    public function show($id)
      {
          return view("combustible.unidad.show",["unidad"=>Unidad::findOrFail($id)]);
      }
    public function edit($id)
    {
    return view("combustible.unidad.edit",["unidad"=>Unidad::findOrFail($id)]);
    }
    public function update(UnidadFormRequest $request, $id)
    {
        $unidad=Unidad::findOrFail($id);
        $unidad->NombreUnidad=$request->get('NombreUnidad');
        $unidad->Descripcion=$request->get('Descripcion');
        $unidad->update();
        return Redirect::to('combustible/unidad');
    }
    public function destroy($id)
    {
        $unidad=Unidad::findOrFail($id);
        $unidad->Estado='0';
        $unidad->update();
        return Redirect::to('combustible/unidad');
    }
}
