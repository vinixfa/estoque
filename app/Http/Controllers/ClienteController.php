<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os cliente
        //dd ('ENTROU NO INDEX');
        $clientes = Cliente::orderBy('nome', 'ASC')->get();

        //select * from cliente order by nome asc;
        //dd($cliente);

        return view('cliente.cliente_index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.cliente_create');

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
         'nome.min'               => 'O :attribute precisa ter no mínimo :min.'
        ];

            $validated = $request->validate([
                'nome'         => 'required|min:2'
            
        ], $messages);
        
        $cliente = new Cliente;
        $cliente->nome          = $request->nome;
        $cliente->cpf            = $request->cpf;
        $cliente->telefone       = $request->telefone;
        $cliente->email          = $request->email;
        $cliente->save();

        return redirect('/cliente')->with('status', 'cliente criado com sucessso!');
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
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view('cliente.cliente_show', ['cliente' => $cliente]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view('cliente.cliente_edit', ['cliente' => $cliente]);
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
        $cliente = Cliente::find($id);
        $cliente->nome           = $request->nome;
        $cliente->cpf            = $request->cpf;
        $cliente->telefone       = $request->telefone;
        $cliente->email          = $request->email;
        $cliente->save();

        return redirect('/cliente')->with('status', 'cliente atualizado com sucesso!');
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
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/cliente')->with('status', 'cliente excluido com sucesso!');

    }
}
