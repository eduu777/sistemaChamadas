<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $user;
    public function __construct()
    {
        $this->user = new User();
    }

   public function index()
{
    $users = $this->user->all();
    if (auth()->check() && auth()->user()->acesso == 'admin') {
        return view('admin.listaUsers', ['usuarios' => $users]);
    }

    return redirect()->route('login.index');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = User::create([
            'nome' => $request['nome'],
            'login' => $request['login'],
            'password' => bcrypt($request['senha']),
            'acesso' => $request['acesso'],
            'local' => $request['local']
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        User::updated($this->user->where('id', $id)->update([
            'nome' => $request['nome'],
            'login' => $request['login'],
            'acesso' => $request['acesso'],
            'local' => $request['local']
        ]));

        return redirect()->route('users.index')->with(['Encaminhado' => 'Encaminhado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();
        return redirect()->route('users.index');
    }
}
