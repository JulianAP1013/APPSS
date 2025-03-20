<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;
use App\Contracts\ListaServiceInterface;

class ListaController extends Controller
{
    protected $listaService;

    public function __construct(ListaServiceInterface $listaService)
    {
        $this->listaService = $listaService;
    }
    public function index()
    {
        $listas = $this->listaService->listarLista();
        return view('listas.index', compact('listas'));
    }


    public function create()
    {
        return view('listas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable|string',
            'fecha_creacion' => 'required|date',
            'id_usuario' => 'required|exists:usuarios,id'
        ]);

        $this->listaService->crearLista($request->all());
        return redirect()->route('listas.index')->with('success');
    }


    public function show($id)
    {
        $lista = $this->listaService->obtenerLista($id);
        return view('listas.show', compact('lista'));
    }


    public function edit($id)
    {
        $lista = $this->listaService->obtenerLista($id);
        return view('listas.edit', compact('lista'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'fecha_creacion' => 'required|date',
            'id_usuario' => 'required|exists:usuarios,id'
        ]);

        $lista = $this->listaService->obtenerLista($id);
        $this->listaService->actualizarLista($lista, $request->all());
        return redirect()->route('listas.index')->with('success');
    }


    public function destroy($id)
    {
        $lista = $this->listaService->obtenerLista($id);
        $this->listaService->desactivarLista($lista);

        return redirect()->route('listas.index')->with('success');
    }
}
