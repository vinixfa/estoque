<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os categorias
        //dd ('ENTROU NO INDEX');
        $categorias = Categoria::orderBy('nome', 'ASC')->get();

        //select * from categorias order by nome asc;
        //dd($categorias);

        return view('categoria.categoria_index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.categoria_create');

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
         'quantidade.required'    => 'O :attribute é obrigatório!',
         'quantidade.integer'     => 'A :attribute é obrigatória!'
        ];

            $validated = $request->validate([
                'nome'         => 'required|min:2',
                'quantidade'   => 'required|integer',
                'valor'        => 'required',
        ], $messages);
        
        $categoria = new Categoria;
        $categoria->nome           = $request->nome;
        $categoria->quantidade     = $request->quantidade;
        $categoria->valor          = $request->valor;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Categoria criado com sucessso!');
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
        $categoria = Categoria::find($id);
        //dd($categoria);
        return view('categoria.categoria_show', ['categoria' => $categoria]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        //dd($categoria);
        return view('categoria.categoria_edit', ['categoria' => $categoria]);
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
        $categoria = Categoria::find($id);
        $categoria->nome          = $request->nome;
        $categoria->quantidade    = $request->quantidade;
        $categoria->valor         = $request->valor;
        $categoria->save();

        return redirect('/categoria')->with('status', 'Categoria atualizado com sucesso!');
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
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect('/categoria')->with('status', 'Categoria excluido com sucesso!');

    }
}
