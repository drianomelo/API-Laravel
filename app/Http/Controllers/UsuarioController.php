<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'cpf' => 'required|integer',
            'nome' => 'required|string',
            'data_nascimento' => 'required|date',
        ]);

        Usuario::create($data);

        return response()->json(['message' => 'Usuário criado com sucesso'], 201);
    }

    public function show($cpf)
    {
        $usuario = Usuario::where('cpf', $cpf)->first();

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado'], 404);
        }

        return response()->json($usuario);
    }
}