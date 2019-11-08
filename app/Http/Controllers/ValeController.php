<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;

use SisCombustible\Http\Requests;
use SisCombustible\Vale;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\ValeFormRequest;
use DB;


class ValeController extends Controller
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
            $vales=DB::table('vale')->where('NoOrdenPedido','LIKE','%'.$query.'%')
            ->where ('Estado','=','1')
            ->orderBy('NoOrdenPedido','desc')
            ->paginate(5);
            return view('combustible.vale.index',["vales"=>$vales,"searchText"=>$query]);
        }
    }
    public function create()
    {   //dd("hola");
        return view("combustible.vale.create");
    }
    public function store (ValeFormRequest $request)
    {
        //dd($request);
        $vale=new Vale;
        $vale->NoOrdenPedido=$request->get('NoOrdenPedido');
        $vale->Fecha=$request->get('Fecha');
        $vale->Cantidad=$request->get('Cantidad');
        $vale->Descripcion=$request->get('Descripcion');
        $vale->Importe=$request->get('Importe');
        $vale->Total=$request->get('Total');
        $vale->Estado='1';
        $vale->save();
        return Redirect::to('combustible/vale');
    }
    public function show($id)
      {
          return view("combustible.vale.show",["vale"=>Vale::findOrFail($id)]);
      }
    public function edit($id)
    {
    return view("combustible.vale.edit",["vale"=>Vale::findOrFail($id)]);
    }
    public function update(ValeFormRequest $request, $id)
    {
        $vale=Vale::findOrFail($id);
        $vale->NoOrdenPedido=$request->get('NoOrdenPedido');
        $vale->Fecha=$request->get('Fecha');
        $vale->Cantidad=$request->get('Cantidad');
        $vale->Descripcion=$request->get('Descripcion');
        $vale->Importe=$request->get('Importe');
        $vale->Total=$request->get('Total');
        $vale->update();
        return Redirect::to('combustible/vale');
    }
    public function destroy($id)
    {
        $vale=Vale::findOrFail($id);
        $vale->Estado='0';
        $vale->update();
        return Redirect::to('combustible/vale');
    }

}
