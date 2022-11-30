<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use Illuminate\Support\Str;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os servicos
        //dd ('ENTROU NO INDEX');
        $servicos = Servico::orderBy('nome', 'ASC')->get();

        //select * from servicos order by nome asc;
        //dd($servicos);

        return view('servico.servico_index', ['servicos' => $servicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servico.servico_create');

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
                'nome'         => 'required|min:3',
                'valor'        => 'required',
                'nome.min'     => 'O :attribute precisa ter no mínimo :min.'
        ]);

            $validated = $request->validate([
                'nome'         => 'required|min:2',

        ], $messages);

        $data = Str::substr($request->agendamento, 6, 4) . '-' . Str::substr($request->agendamento, 3, 2) . '-' . Str::substr($request->agendamento, 0, 2);
        //dd($data);

        $servico = new Servico;
        $servico->nome                  = $request->nome;
        $servico->servico               = $request->servico;
        $servico->profissional          = $request->profissional;
        $servico->valor                 = $request->valor;
        $servico->agendamento           = $data;
        $servico->save();

        return redirect('/servico')->with('status', 'Servico criado com sucessso!');
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
        $servico = Servico::find($id);
        //dd($servico);
        return view('servico.servico_show', ['servico' => $servico]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servico = Servico::find($id);
        //dd($servico);
        return view('servico.servico_edit', ['servico' => $servico]);
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
     
     //dd($request->agendamento);
     
       // $data = Str::substr($request->agendamento, 6, 4) . '-' . Str::substr($request->agendamento, 3, 2) . '-' . Str::substr($request->agendamento, 0, 2);
        //dd($data);

        $servico = Servico::find($id);
        $servico->nome                  = $request->nome;
        $servico->servico               = $request->servico;
        $servico->profissional          = $request->profissional;
        $servico->valor                 = $request->valor;
        $servico->agendamento           = $request->agendamento;
        $servico->save();

        //dd('UPDATE')
       

        return redirect('/servico')->with('status', 'Servico atualizado com sucesso!');
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
        $servico = Servico::find($id);
        $servico->delete();

        return redirect('/servico')->with('status', 'Servico excluido com sucesso!');

    }
}
