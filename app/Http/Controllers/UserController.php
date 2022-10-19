<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $users = User::orderBy('name', 'ASC')->get();

        //select * from usuarios order by name asc;
        //dd($usuarios);

        return view('user.user_index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_create');

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
         'name.required'          => 'O campo :attribute é obrigatóri000o!',
         'name.min'               => 'O :attribute precisa ter no mínimo :min.'
        ];

            $validated = $request->validate([
                'name'              => 'required|min:2',
                'password.required' => 'O campo senha é obrigatório!',
                'password.same'     => 'As senham precisam ser identicas!'
                
        ], $messages);
      
        $user = new User;
        $user->name         = $request->name;
        $user->cpf          = $request->cpf;
        $user->telefone     = $request->telefone;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->save();

        return redirect('/user')->with('status', 'User criado com sucessso!');
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
        $user = User::find($id);
        //dd($user);
        return view('user.user_show', ['user' => $user]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        //dd($user);
        return view('user.user_edit', ['user' => $user]);
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
        $user = User::find($id);
        $user->name         = $request->name;
        $user->cpf          = $request->cpf;
        $user->telefone     = $request->telefone;
        $user->email        = $request->email;
        $user->save();

        return redirect('/user')->with('status', 'User atualizado com sucesso!');
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
        $user = User::find($id);
        $user->delete();

        return redirect('/user')->with('status', 'User excluido com sucesso!');

    }
}
