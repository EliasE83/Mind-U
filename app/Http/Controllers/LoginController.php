<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'contrasena' => 'required',
        ]);

        if (Auth::attempt(['name' => $request->nombre, 'password' => $request->contrasena])) {
            // Authentication passed...
            return redirect()->intended('index');
        }

        return back()->withErrors([
            'nombre' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
