<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistroUsuarioController extends Controller
{
    //
    public function index()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'correo' => 'required|email',
            'contrasena' => 'required',
        ]);

        $user = new User();
        $user->name = $request->usuario;
        $user->email = $request->correo;
        $user->password = Hash::make($request->contrasena);
        $user->save();

        // User::create([
        //     'name' => $request->usuario,
        //     'email' => $request->correo,
        //     'password' => $request->contrasena,
        
        // ]);

        return redirect()->route('login.index');
    }
}
