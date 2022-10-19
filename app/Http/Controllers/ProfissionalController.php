<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profissional;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os profissionais
        //dd ('ENTROU NO INDEX');
        $profissionais = Profissional::orderBy('nome', 'ASC')->get();

        //select * from profissionais order by nome asc;
        //dd($profissionais);

        return view('profissional.profissional_index', ['profissionais' => $profissionais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profissional.profissional_create');

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
        ];

            $validated = $request->validate([
                'nome'         => 'required|min:2',
        ], $messages);
        
        $profissional = new Profissional;
        $profissional->nome           = $request->nome;
       
        $profissional->save();

        return redirect('/profissional')->with('status', 'Profissional criado com sucessso!');
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
        $profissional = Profissional::find($id);
        //dd($profissional);
        return view('profissional.profissional_show', ['profissional' => $profissional]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profissional = Profissional::find($id);
        //dd($profissional);
        return view('profissional.profissional_edit', ['profissional' => $profissional]);
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
        $profissional = Profissional::find($id);
        $profissional->nome          = $request->nome;
       
        $profissional->save();

        return redirect('/profissional')->with('status', 'Profissional atualizado com sucesso!');
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
        $profissional = Profissional::find($id);
        $profissional->delete();

        return redirect('/profissional')->with('status', 'Profissional excluido com sucesso!');

    }
}
