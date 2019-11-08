<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SisCombustible\Http\Request\CompraFormRequest;
use SisCombustible\Compra;
use SisCombustible\DetalleCompra;
use DB;

use Response;
use Illuminate\Support\Collection;

class CompraController extends Controller
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
          $compras=DB::table('compra as c')
          ->join('proveedor as p','c.idProveedor',"=",'p.idProveedor')
          ->join('detalle_compra as dc','c.idCompra',"=",'dc.idCompra')
          ->select('c.idCompra','p.Proveedor','c.Tipo_Comprobante','c.Serie_Comprobante','c.Numero_Comprobante','c.Fecha',DB::raw('sum(dc.Cantidad*precioCompra) as Total'))
          ->where('c.Serie_Comprobante','LIKE','%'.$query.'%')
          ->orderBy('c.idCompra','desc')
          ->groupBy('c.idCompra','p.idProveedor','c.Tipo_Comprobante','c.Serie_Comprobante','c.Numero_Comprobante','c.Fecha')
          ->paginate(5);
          return view('combustible.compras.index',["compras"=>$compras,"searchText"=>$query]);
      }
  }
  public function create()
  {

      $proveedores=DB::table('proveedor')->where('Estado','=','1')->get();
      $combustibles=DB::table('combustible as combs')
        ->select(DB::raw('CONCAT(combs.Nombre," ", combs.Stock) AS combustibles'),'combs.idCombustible')
        ->where('combs.Estado','=','1')
        ->get();
      return view("combustible.compras.create",['proveedores'=>$proveedores,"combustibles"=>$combustibles]);
  }
  public function store (CompraFormRequest $request)
  {
    try{
      DB::beginTransaction();
      $compra=new Compra;
      $compra->Proveedor=$request->get('Proveedor');
      $compra->Tipo_Comprobante=$request->get('Tipo_Comprobante');
      $compra->Serie_Comprobante=$request->get('Serie_Comprobante');
      $compra->Numero_Comprobante=$request->get('Numero_Comprobante');
      $compra->Fecha=$request->get('Fecha');
      $compra->Estado='1';
      $compra->save();

      $idCombustible = $request->get('idCombustible');
      $FechaCompra = $request->get('FechaCompra');
      $Cantidad = $request->get('Cantidad');
      $PrecioCompra = $request->get('PrecioCompra');

      $cont = 0;
      while ($cont < count($idCombustible)) {
        $detalle = new DetalleCompra();
        $detalle->idCompra= $compra->idCompra;
        $detalle->idCombustible= $idCombustible[$cont];
        $detalle->FechaCompra= $FechaCompra[$cont];
        $detalle->Cantidad= $Cantidad[$cont];
        $detalle->save();
        $cont=$cont+1;
        // code...
      }

      DB::commint();

    }catch(\Exception $e){
      DB::rollback();
      return Redirect::to('combustible/compras');

    }

  }
  public function show($id)
    {
      $compra=DB::table('compra as c')
      ->join('proveedor as p','c.idProveedor',"=","p.idProveedor")
      ->join('detalle_compra as dc','c.idCompra',"=","dc.idCompra")
      ->select('c.idCompra','p.Proveedor','c.Tipo_Comprobante','c.Serie_Comprobante','c.Numero_Comprobante','c.Fecha',DB::raw('sum(dc.Cantidad*precioCompra) as Total'))
      ->where('c.idCompra','=',$id)
      ->first();

      $detalles=DB::table('detalle_compra as d')
      ->join('combustible as c','d.idCombustible','=','c.idCombustible')
      ->select('c.Nombre as combustible','d.FechaCompra','d.Cantidad','d.PrecioCompra')
      ->where('d.idCompra','=',$id)
      ->get();
      return view("combustible.compras.show",["compra"=>$compra,"detalles"=>$detalles]);
    }
  public function destroy($id)
  {
      $compra=Compra::findOrFail($id);
      $compra->Estado='0';
      $compra->update();
      return Redirect::to('combustible/compras');
  }

}
