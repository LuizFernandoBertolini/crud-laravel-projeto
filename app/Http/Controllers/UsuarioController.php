<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Usuario;
use Illuminate\View\View;

class UsuarioController extends Controller
{
    public function index(): View
    {
        $usuarios = Usuario::all();
        return view ('index')->with('usuarios', $usuarios);
    }
 
    public function create(): View
    {
        return view('create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Usuario::create($input);
        return redirect('usuarios')->with('flash_message', 'Usuário Adicionado!');
    }

    public function show(string $id): View
    {
        $usuario = Usuario::find($id);
        return view('show')->with('usuarios', $usuario);
    }

    public function edit(string $id): View
    {
        $usuario = Usuario::find($id);
        return view('edit')->with('usuarios', $usuario);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $usuario = Usuario::find($id);
        $input = $request->all();
        $usuario->update($input);
        return redirect('usuarios')->with('flash_message', 'Usuário Atualizado!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Usuario::destroy($id);
        return redirect('usuarios')->with('flash_message', 'Usuário Deletado!'); 
    }
}
