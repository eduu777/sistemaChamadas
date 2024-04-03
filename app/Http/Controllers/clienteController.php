<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $cliente;
    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function index()
    {
        $clientes = Cliente::where('prioridade', 'nao')->where('local', auth()->user()->local)->get();
        if(auth()->user()->acesso == "admin"){
            return view('users.chamar', ['clientes' => $clientes, 'extends' => 'layouts.admin']);
           }else{
            return view('users.chamar', ['clientes' => $clientes, 'extends' => 'layouts.profissional']);
           }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->acesso == "admin"){
            return view('users.addCliente', ['extends' => 'layouts.admin']);
           }else{
            return view('users.addCliente', ['extends' => 'layouts.profissional']);
           }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = Cliente::create([
            'nome' => $request['nome'],
            'local' => $request['local'],
            'prioridade' => $request['prioridade'],
        ]);

        return redirect()->route('cliente.create')->with(['Encaminhado' => 'Encaminhado com sucesso']);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function encaminhar(Request $request, string $id)
    {
        $cliente = $this->cliente->find($id);
        Cliente::updated($cliente->where('id', $id)->update([
            'local' => $request['local']
        ]));
        return redirect()->route('cliente.index')->with(['Encaminhado' => 'Encaminhado com sucesso']);
    }

    public function finalizar(string $id)
    {
        $cliente = $this->cliente->find($id);
        Cliente::updated($cliente->where('id', $id)->update([
            'local' => 'Finalizado'
        ]));
        return redirect()->route('cliente.index')->with(['Encaminhado' => 'Encaminhado com sucesso']);
    }
    
    public function prioridade()
    {
       $clientes = Cliente::where('prioridade', 'sim')->where('local', auth()->user()->local)->get();
       if(auth()->user()->acesso == "admin"){
        return view('users.chamar', ['clientes' => $clientes, 'extends' => 'layouts.admin']);
       }else{
        return view('users.chamar', ['clientes' => $clientes, 'extends' => 'layouts.profissional']);
       }
       
    }

    public function delAll()
    {
        Cliente::query()->delete();
        return redirect()->route('db')->with(['Encaminhado' => 'Banco resetado com sucesso']);
    }
}
