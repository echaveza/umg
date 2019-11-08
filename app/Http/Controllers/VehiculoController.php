<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Vehiculo;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\VehiculoFormRequest;
use DB;


class VehiculoController extends Controller
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
          $vehiculos=DB::table('vehiculo')->where('Marca','LIKE','%'.$query.'%')
          ->where ('Estado','=','1')
          ->orderBy('idVehiculo','desc')
          ->paginate(5);
          return view('combustible.vehiculo.index',["vehiculos"=>$vehiculos,"searchText"=>$query]);
      }
  }
  public function create()
  {   //dd("hola");
      return view("combustible.vehiculo.create");
  }
  public function store (VehiculoFormRequest $request)
  {
    $vehiculo=new Vehiculo;
    //dd($request);
    $vehiculo->Marca=$request->get('Marca');
    $vehiculo->NoPasajeros=$request->get('NoPasajeros');
    $vehiculo->Modelo=$request->get('Modelo');
    $vehiculo->Placas=$request->get('Placas');
    $vehiculo->Color=$request->get('Color');
    $vehiculo->Cilindros=$request->get('Cilindros');
    $vehiculo->Capacidad=$request->get('Capacidad');
    $vehiculo->Combustible=$request->get('Combustible');
    $vehiculo->TResponsabilidad=$request->get('TResponsabilidad');
    $vehiculo->NoMotor=$request->get('NoMotor');
    $vehiculo->NoChasis=$request->get('NoChasis');
    $vehiculo->CalVigente=$request->get('CalVigente');
    $vehiculo->IdentificadorOficial=$request->get('IdentificadorOficial');
    $vehiculo->PfAsignado=$request->get('PfAsignado');
    $vehiculo->SVigente=$request->get('SVigente');
    $vehiculo->KeyTuercas=$request->get('KeyTuercas');
    $vehiculo->Tricket=$request->get('Tricket');
    $vehiculo->LlantaRepuesto=$request->get('LlantaRepuesto');
    $vehiculo->Estado='1';
    $vehiculo->save();
    return Redirect::to('combustible/vehiculo');
  }
  public function show($id)
  {
    return view("combustible.vehiculo.show",["vehiculo"=>Vehiculo::findOrFail($id)]);
  }
  public function edit($id)
  {
   return view("combustible.vehiculo.edit",["vehiculo"=>Vehiculo::findOrFail($id)]);
  }
  public function update(VehiculoFormRequest $request,$id)
  {
    $vehiculo=Vehiculo::findOrFail($id);
    $vehiculo->Marca=$request->get('Marca');
    $vehiculo->NoPasajeros=$request->get('NoPasajeros');
    $vehiculo->Modelo=$request->get('Modelo');
    $vehiculo->Placas=$request->get('Placas');
    $vehiculo->Color=$request->get('Color');
    $vehiculo->Cilindros=$request->get('Cilindros');
    $vehiculo->Capacidad=$request->get('Capacidad');
    $vehiculo->Combustible=$request->get('Combustible');
    $vehiculo->TResponsabilidad=$request->get('TResponsabilidad');
    $vehiculo->Serie=$request->get('Serie');
    $vehiculo->RVehiculo=$request->get('RVehiculo');
    $vehiculo->NoMotor=$request->get('NoMotor');
    $vehiculo->NoChasis=$request->get('NoChasis');
    $vehiculo->CalVigente=$request->get('CalVigente');
    $vehiculo->IdentificadorOficial=$request->get('IdentificadorOficial');
    $vehiculo->PfAsignado=$request->get('PfAsignado');
    $vehiculo->SVigente=$request->get('SVigente');
    $vehiculo->KeyTuercas=$request->get('KeyTuercas');
    $vehiculo->Tricket=$request->get('Tricket');
    $vehiculo->LlantaRepuesto=$request->get('LlantaRepuesto');
    $vehiculo->update();
    return Redirect::to('combustible/vehiculo');
  }
  public function destroy($id)
  {
    $vehiculo=Vehiculo::findOrFail($id);
    $vehiculo->Estado='0';
    $vehiculo->update();
    return Redirect::to('combustible/vehiculo');
  }

}
