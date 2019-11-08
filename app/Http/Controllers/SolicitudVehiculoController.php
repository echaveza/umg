<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;
use SisCombustible\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\SolicitudVehiculoFormRequest;
use DB;


class SolicitudVehiculoController extends Controller
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
            $solicitudvehiculos=DB::table('solicitud as s')
            ->join('colaborador as c','s.Responsable',"=","c.idColaborador")
            ->join('destino as d','s.Destino',"=","d.idDestino")
            ->select('s.idSolicitud','FechaSolicitud','c.Unidad','Duracion','Objetivo','c.Nombres','s.Telefono','NoPersonas','d.Destino','FechaIni','FechaFin','Kilometraje','HoraSalida')
            ->orderBy('s.idSolicitud','desc')
            ->paginate(5);
            return view('combustible.solicitud.index',["solicitudvehiculos"=>$solicitudvehiculos,"searchText"=>$query]);
        }
    }
    public function create()
    {
        //dd("Hola");
        $colaboradores=DB::table('colaborador')->where('Estado','=','1')->get();
        $destinos=DB::table('destino')->where('Estado','=','1')->get();
        return view("combustible.solicitud.create",["colaboradores"=>$colaboradores,"destinos"=>$destinos]);

    }
    public function store (SolicitudVehiculoFormRequest $request)
    {
        $solicitudvehiculo=new SolicitudVehiculo;
        dd($request);
        $solicitudvehiculo->FechaSolicitud=$request->get('FechaSolicitud');
        $solicitudvehiculo->Unidad=$request->get('Unidad');
        $solicitudvehiculo->Duracion=$request->get('Duracion');
        $solicitudvehiculo->Objetivo=$request->get('Objetivo');
        $solicitudvehiculo->Responsable=$request->get('Responsable');
        $solicitudvehiculo->Telefono=$request->get('Telefono');
        $solicitudvehiculo->NoPersonas=$request->get('NoPersonas');
        $solicitudvehiculo->Destino=$request->get('Destino');
        $solicitudvehiculo->FechaIni=$request->get('FechaIni');
        $solicitudvehiculo->FechaFin=$request->get('FechaFin');
        $solicitudvehiculo->HoraSalida=$request->get('HoraSalida');
        $solicitudvehiculo->Kilometraje=$request->get('Kilometraje');
        $solicitudvehiculo->Estado='1';
        $solicitudvehiculo->save();
        return Redirect::to('combustible/solicitud');
    }
    public function show($id)
      {
          return view("combustible.solicitud.show",["solicitudvehiculo"=>SolicitudVehiculo::findOrFail($id)]);
      }
      public function edit($id)
      {
        $compra=Compra::findOrFail($id);
        $proveedores=DB::table('proveedor')->where('Estado','=','1')->get();
        return view("combustible.compras.edit",["compra"=>$compra,"proveedores"=>$proveedores]);
      }
    public function update(SolicitudVehiculouloFormRequest $request,$id)
    {
        $compra=Compra::findOrFail($id);
        $compra->Proveedor=$request->get('Proveedor');
        $compra->Serie=$request->get('Serie');
        $compra->Factura=$request->get('Factura');
        $compra->FechaCompra=$request->get('FechaCompra');
        $compra->Cantidad=$request->get('Cantidad');
        $compra->Descripcion=$request->get('Descripcion');
        $compra->Valor=$request->get('Valor');
        $compra->Total=$request->get('Total');
        $compra->update();
        return Redirect::to('combustible/compras');
    }
    public function destroy($id)
    {
        $compra=Compra::findOrFail($id);
        $compra->Estado='0';
        $compra->update();
        return Redirect::to('combustible/compras');
    }

  }
