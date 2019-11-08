<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Piloto;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\PilotoFormRequest;
use DB;

class PilotoController extends Controller
{
  public function __construct()
  {
  //  $this->middleware('auth');
  }
    public function index(Request $request)
    {
      if ($request)
        {
            $query=trim($request->get('searchText'));
            $pilotos=DB::table('piloto')->where('Piloto','LIKE','%'.$query.'%')
            ->orderBy('idPiloto','desc')
            ->paginate(5);
            return view('seguridad.piloto.index',["pilotos"=>$pilotos,"searchText"=>$query]);
        }
    }
    public function create()
    {   //dd("hola");
        return view("seguridad.piloto.create");
    }
    public function store (PilotoFormRequest $request)
    {
        //dd($request);
        $piloto=new Piloto;
        $piloto->Piloto=$request->get('Piloto');
        $piloto->Direccion=$request->get('Direccion');
        $piloto->Telefono=$request->get('Telefono');
        $piloto->Estado='1';
        $piloto->save();
        return Redirect::to('seguridad/piloto');
    }
    public function edit($id)
    {
    return view("seguridad.piloto.edit",["piloto"=>Piloto::findOrFail($id)]);
    }
    public function show($id)
      {
        dd($request);
          return view("seguridad.piloto.show",["piloto"=>Piloto::findOrFail($id)]);
      }

    public function update(PilotoFormRequest $request, $id)
    {
        $piloto=Piloto::findOrFail($id);
        $piloto->Piloto=$request->get('Piloto');
        $piloto->Direccion=$request->get('Direccion');
        $piloto->Telefono=$request->get('Telefono');
        $piloto->update();
        return Redirect::to('seguridad/piloto');
    }
    public function destroy($id)
    {
        $piloto=DB::table('piloto')->where('idPiloto','=', $id)->delete();
        $piloto->Estado='0';
        $piloto->update();
        return Redirect::to('seguridad/usuario');
    }

}
