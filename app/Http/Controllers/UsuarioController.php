<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Contracts\UsuarioServiceInterface;


class UsuarioController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioServiceInterface $usuarioService)
    {

        $this->usuarioService = $usuarioService;
    }

    public function index()
    {
        $usuarios = $this->usuarioService->listarUsuarios();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios',
            'contraseña' => 'required',
        ]);

        $this->usuarioService->crearUsuarios($request->all());

        return redirect()->route('usuarios.index')->with('success');
    }

    public function show($id)
    {
        $usuario = $this->usuarioService->obtenerUsuarios($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = $this->usuarioService->obtenerUsuarios($id);
        return view('usuarios.edit', compact('usuario'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:usuarios' . $id,
            'contraseña' => 'required',
        ]);

        $usuario = $this->usuarioService->obtenerUsuarios($id);
        $this->usuarioService->actualizarUsuarios($usuario, $request->all());
        return redirect()->route('usuarios.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
