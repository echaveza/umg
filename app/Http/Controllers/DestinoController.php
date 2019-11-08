<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Destino;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\DestinoFormRequest;
use DB;



class DestinoController extends Controller
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
          $destinos=DB::table('destino')->where('Destino','LIKE','%'.$query.'%')
          ->where ('Estado','=','1')
          ->orderBy('idDestino','asc')
          ->paginate(5);
          return view('ubicacion.destino.index',["destinos"=>$destinos,"searchText"=>$query]);
      }

  }
  public function create()
  {   //dd("hola");
      return view("ubicacion.destino.create");
  }
  public function store (DestinoFormRequest $request)
  {
  //dd($request);
    //dd($request);
    $destino=new Destino;
    $destino->Destino=$request->get('Destino');
    $destino->Kilometraje=$request->get('Kilometraje');
    $destino->Estado='1';
    $destino->save();
    return Redirect::to('ubicacion/destino');


  }
  public function show($id)
    {
        return view("ubicacion.destino.show",["destino"=>Destino::findOrFail($id)]);
    }
  public function edit($id)
  {
  return view("ubicacion.destino.edit",["destino"=>Destino::findOrFail($id)]);
  }
  public function update(DestinoFormRequest $request, $id)
  {
      $destino=destino::findOrFail($id);
      $destino->Destino=$request->get('Destino');
      $destino->Kilometraje=$request->get('Kilometraje');
      $destino->update();
      return Redirect::to('ubicacion/destino');
  }
  public function destroy($id)
  {
      $destino=destino::findOrFail($id);
      $destino->Estado='0';
      $destino->update();
      return Redirect::to('ubicacion/destino');
  }
}
