<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Proveedor;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\ProveedorFormRequest;
use DB;

class ProveedorController extends Controller
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
          $proveedores=DB::table('proveedor')->where('Proveedor','LIKE','%'.$query.'%')
          ->where ('Estado','=','1')
          ->orderBy('idProveedor','desc')
          ->paginate(5);
          return view('combustible.proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
      }
  }
  public function create()
  {   //dd("hola");
      return view("combustible.proveedor.create");
  }
  public function store (ProveedorFormRequest $request)
  {
      $proveedor=new Proveedor;
      //dd($request);
      $proveedor->Proveedor=$request->get('Proveedor');
      $proveedor->Contacto=$request->get('Contacto');
      $proveedor->Direccion=$request->get('Direccion');
      $proveedor->Nit=$request->get('Nit');
      $proveedor->Telefono=$request->get('Telefono');
      $proveedor->Estado='1';
      $proveedor->save();
      return Redirect::to('combustible/proveedor');
  }
  public function show($id)
    {
        return view("combustible.proveedor.show",["proveedor"=>Proveedor::findOrFail($id)]);
    }
  public function edit($id)
  {
  return view("combustible.proveedor.edit",["proveedor"=>Proveedor::findOrFail($id)]);
  }
  public function update(ProveedorFormRequest $request, $id)
  {
      $proveedor=Proveedor::findOrFail($id);
      $proveedor->Proveedor=$request->get('Proveedor');
      $proveedor->Contacto=$request->get('Contacto');
      $proveedor->Direccion=$request->get('Direccion');
      $proveedor->Nit=$request->get('Nit');
      $proveedor->Telefono=$request->get('Telefono');
      $proveedor->update();
      return Redirect::to('combustible/proveedor');
  }
  public function destroy($id)
  {
      $proveedor=Proveedor::findOrFail($id);
      $proveedor->Estado='0';
      $proveedor->update();
      return Redirect::to('combustible/proveedor');
  }
}
