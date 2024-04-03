<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
            return view('login');
    }
    public function store(Request $request){
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('login', 'password');
        $autenticacao = Auth::attempt($credentials);

        
        if(!$autenticacao){
            return redirect()->route('login.index')->withErrors(['error' => 'Login ou senha inválidos!']);
        }else{
            $user = Auth::user();
            if($user['acesso'] == 'admin'){
                return redirect()->route('cliente.index');
            }
            if($user['acesso'] == 'profissional'){
                return redirect()->route('cliente.index');
            }
        }

    }
    public function destroy(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
