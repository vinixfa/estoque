<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os usuarios
        //dd ('ENTROU NO INDEX');
        $usuarios = Usuario::orderBy('nome', 'ASC')->get();

        //select * from usuarios order by nome asc;
        //dd($usuarios);

        return view('usuario.usuario_index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.usuario_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $messages = [
         'nome.required'          => 'O campo :attribute é obrigatório!',
         'nome.min'               => 'O :attribute precisa ter no mínimo :min.',
         'cpf.required'           => 'O :attribute é obrigatório!',
         'cpf.string'            => 'O :attribute é obrigatória!',
         'telefone.required'      => 'O campo :attribute é obrigatório!',
         'email.required'         => 'O :attribute é obrigatório!'
        ];  

            $validated = $request->validate([
                'nome'          => 'required|min:2',
                'cpf'           => 'required|string',
                'telefone'      => 'required|integer',
                'email'         => 'email:rfc,dns'
        ], $messages);
        
        $usuario = new Usuario;
        $usuario->nome           = $request->nome;
        $usuario->cpf            = $request->cpf;
        $usuario->telefone       = $request->telefone;
        $usuario->email          = $request->email;
        $usuario->save();

        return redirect('/usuario')->with('status', 'Usuario criado com sucessso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('ENTROU NO SHOW');
        $usuario = Usuario::find($id);
        //dd($usuario);
        return view('usuario.usuario_show', ['usuario' => $usuario]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        //dd($usuario);
        return view('usuario.usuario_edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('UPDATE')
        $usuario = Usuario::find($id);
        $usuario->nome           = $request->nome;
        $usuario->cpf            = $request->cpf;
        $usuario->telefone       = $request->telefone;
        $usuario->email          = $request->email;
        $usuario->save();

        return redirect('/usuario')->with('status', 'Usuario atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd('DESTROY');
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect('/usuario')->with('status', 'Usuario excluido com sucesso!');

    }
}
