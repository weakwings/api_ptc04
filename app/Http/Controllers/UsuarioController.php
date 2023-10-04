<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function listarUsuarios()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function mostrarUsuario($id)
    {
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }
}
