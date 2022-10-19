<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salao;

class SalaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os produtos
        //dd ('ENTROU NO INDEX');
        $saloes = Salao::orderBy('nome', 'ASC')->get();

        //select * from produtos order by nome asc;
        //dd($produtos);

        return view('salao.salao_index', ['saloes' => $saloes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salao.salao_create');

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
        
        $salao = new Salao;
        $salao->nome           = $request->nome;
        $salao->save();

        return redirect('/salao')->with('status', 'Salao criado com sucessso!');
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
        $salao = Salao::find($id);
        //dd($salao);
        return view('salao.salao_show', ['salao' => $salao]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salao = Salao::find($id);
        //dd($salao);
        return view('salao.salao_edit', ['salao' => $salao]);
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
        $salao = Salao::find($id);
        $salao->nome          = $request->nome;
        $salao->save();

        return redirect('/salao')->with('status', 'Salao atualizado com sucesso!');
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
        $salao = Salao::find($id);
        $salao->delete();

        return redirect('/salao')->with('status', 'Salao excluido com sucesso!');

    }
}
