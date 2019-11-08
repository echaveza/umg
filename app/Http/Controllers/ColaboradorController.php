<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;
use SisCombustible\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\ColaboradorFormRequest;
use SisCombustible\Colaborador;

use DB;

class ColaboradorController extends Controller
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
          $colaboradores=DB::table('colaborador as c')
          ->join('unidad as u','c.Unidad',"=","u.idUnidad")
          ->select('c.idColaborador','u.NombreUnidad','c.Nombres','c.Apellidos','c.Telefono','c.Cargo','c.Renglon','c.FechaNacimiento')
          ->where ('c.Estado','=','1')
          ->where('c.Nombres','LIKE','%'.$query.'%')
          ->orderBy('c.idColaborador','desc')
          ->paginate(5);
          return view('combustible.colaboradores.index',["colaboradores"=>$colaboradores,"searchText"=>$query]);
      }
  }
  public function create()
  {
      //dd("Hola");
      $unidades=DB::table('unidad')->where('Estado','=','1')->get();
      return view("combustible.colaboradores.create",['unidades'=>$unidades]);
  }
  public function store (ColaboradorFormRequest $request)
  {
      $colaborador=new Colaborador;
      //dd($request);
      $colaborador->Unidad=$request->get('Unidad');
      $colaborador->Nombres=$request->get('Nombres');
      $colaborador->Apellidos=$request->get('Apellidos');
      $colaborador->Telefono=$request->get('Telefono');
      $colaborador->Cargo=$request->get('Cargo');
      $colaborador->Renglon=$request->get('Renglon');
      $colaborador->FechaNacimiento=$request->get('FechaNacimiento');
      $colaborador->Estado='1';
      $colaborador->save();
      return Redirect::to('combustible/colaboradores');
  }
  public function show($id)
    {
        return view("combustible.colaborador.show",["colaborador"=>Colaborador::findOrFail($id)]);
    }
    public function edit($id)
    {
      $colaborador=Colaborador::findOrFail($id);
      $unidades=DB::table('unidad')->where('Estado','=','1')->get();
      return view("combustible.colaboradores.edit",["colaborador"=>$colaborador,"unidades"=>$unidades]);
    }
  public function update(ColaboradorFormRequest $request,$id)
  {
      $colaborador=Colaborador::findOrFail($id);
      $colaborador->Unidad=$request->get('Unidad');
      $colaborador->Nombres=$request->get('Nombres');
      $colaborador->Apellidos=$request->get('Apellidos');
      $colaborador->Telefono=$request->get('Telefono');
      $colaborador->Cargo=$request->get('Cargo');
      $colaborador->Renglon=$request->get('Renglon');
      $colaborador->FechaNacimiento=$request->get('FechaNacimiento');
      $colaborador->update();
      return Redirect::to('combustible/colaboradores');
  }
  public function destroy($id)
  {
      $colaborador=Colaborador::findOrFail($id);
      $colaborador->Estado='0';
      $colaborador->update();
      return Redirect::to('combustible/colaboradores');
  }

}
