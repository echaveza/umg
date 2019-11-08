<?php

namespace SisCombustible\Http\Controllers;

use Illuminate\Http\Request;
use SisCombustible\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\CombFormRequest;
use SisCombustible\Comb;

use DB;

class CombController extends Controller
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
            $combustibles=DB::table('combustible')->where('Nombre','LIKE','%'.$query.'%')
            ->where ('Estado','=','1')
            ->orderBy('idCombustible','desc')
            ->paginate(5);
            return view('combustible.comb.index',["combustibles"=>$combustibles,"searchText"=>$query]);
        }
    }
    public function create()
    {   //dd("hola");
        return view("combustible.comb.create");
    }
    public function store (CombFormRequest $request)
    {
        $combustible=new Comb;
        //dd($request);
        $combustible->Nombre=$request->get('Nombre');
        $combustible->Stock=$request->get('Stock');
        $combustible->Estado='1';
        $combustible->save();
        return Redirect::to('combustible/comb');
    }
    public function show($id)
      {
          return view("combustible.comb.show",["combustible"=>Comb::findOrFail($id)]);
      }
    public function edit($id)
    {
    return view("combustible.comb.edit",["combustible"=>Comb::findOrFail($id)]);
    }
    public function update(CombFormRequest $request, $id)
    {
        $combustible=Comb::findOrFail($id);
        $combustible->Nombre=$request->get('Nombre');
        $combustible->Stock=$request->get('Stock');
        $combustible->update();
        return Redirect::to('combustible/comb');
    }
    public function destroy($id)
    {
        $combustible=Comb::findOrFail($id);
        $combustible->Estado='0';
        $combustible->update();
        return Redirect::to('combustible/comb');
    }
}
