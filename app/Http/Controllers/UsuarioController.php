<?php

namespace SisCombustible\Http\Controllers;

use SisCombustible\Http\Requests;
use SisCombustible\User;
use Illuminate\Support\Facades\Redirect;
use SisCombustible\Http\Requests\UnidadFormRequest;
use DB;


class UsuarioController extends Controller
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
            $usuarios=DB::table('users')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(5);
            return view('seguridad.usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        }
    }
    public function create()
    {   //dd("hola");
        return view("seguridad.usuario.create");
    }
    public function store (UsuarioFormRequest $request)
    {
        //dd($request);
        $usuario=new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->save();
        return Redirect::to('seguridad/usuario');
    }
    public function edit($id)
    {
    return view("seguridad.usuario",["usuario"=>User::findOrFail($id)]);
    }
    public function show($id)
      {
        dd($request);
          return view("seguridad.usuario.show",["usuario"=>User::findOrFail($id)]);
      }

    public function update(UsuarioFormRequest $request, $id)
    {
        $usuario=User::findOrFail($id);
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('email'));
        $usuario->update();
        return Redirect::to('seguridad/usuario');
    }
    public function destroy($id)
    {
        $usuario=DB::table('users')->where('id','=', $id)->delete();
        $unidad->Estado='0';
        $unidad->update();
        return Redirect::to('seguridad/usuario');
    }

}
