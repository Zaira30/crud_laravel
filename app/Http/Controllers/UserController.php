<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::latest()->paginate(10);
        return view('usuarios.index',compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cpf' => 'required|string|cpf|max:20|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        User::create($request->all());
        return redirect()->route('usuarios.index')
            ->with('success','Usuário criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return view('usuarios.show',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(User $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    public function update(Request $request, User $usuarios)
    {
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'cpf' => 'required|string|cpf|max:20|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $usuarios->update($request->all());
        return redirect()->route('usuarios.index')
            ->with('success','Usuário alterado com sucesso');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('usuarios.index')
            ->with('success','Usuário apagado com sucesso');
    }

}
