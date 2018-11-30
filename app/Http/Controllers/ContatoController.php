<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use Illuminate\Support\Facades\Auth;

class ContatoController extends Controller
{

    public function index()
    {

        $contatos= Contato::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index', compact('contatos'));
    }


    public function create()
    {
        return view('admin.create');

    }


    public function store(Request $request)
    {

        $contato = new Contato;
        $contato->nome = $request->input('nome');
        $contato->fone = $request->input('fone');
        $contato->email = $request->input('email');
        $contato->empresa = $request->input('empresa');
        Auth::user()->contatos()->save($contato);

        return redirect('/');
    }


    public function show($id)
    {
        return view('admin.show');

    }


    public function edit($id)
          {

              $contato = Contato::find($id);
              return view('admin.edit', ['contato'=>$contato]);

          }


    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);
        $contato->nome = $request->input('nome');
        $contato->fone = $request->input('fone');
        $contato->email = $request->input('email');
        $contato->empresa = $request->input('empresa');
        $contato->save();
         return redirect('/');

    }


    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();
        return redirect('/');

    }

}//Fim
