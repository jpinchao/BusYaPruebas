<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = Cliente::all();

        if ($request->is('api/*')) {
            return $clientes;
        } else {
            return view('cuenta_Admin.cliente.create', compact('clientes')); //revisar que pagina se va usar para listar los clientes
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    //Crear un cliente desde la vista de un administrador
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->cedula = $request->cedula;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        if ($request->is('api/*')) {
            return back()->with('success', 'Cliente creado correctamente');
        } else {
            return redirect()->route('clientes.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $cliente = Cliente::find($cliente->id);
        return view('clientes.', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*Cliente*/$cliente)
    {
        $cliente = Cliente::find($cliente);
        return view('cuenta_Admin.cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente = Cliente::find($cliente->id); //revisar con documentacion actualizada
        $cliente->nombre = $request->nombre;
        $cliente->cedula = $request->cedula;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, /*Cliente*/$cliente)
    {
        $cliente = Cliente::find($cliente); //revisar con documentacion actualizada
        $cliente->delete();
        if ($request->is('api/*')) {
            return back()->with('success', 'Cliente eliminado correctamente');
        } else {
            return redirect()->route('clientes.index');
        }
    }

    public function generar_pdf()
    {
        $clientes = Cliente::all();
        $pdf = PDF\Pdf::loadView('cuenta_Admin.cliente.generar_pdf', compact('clientes'));
        return $pdf->download('Clientes.pdf');
    }
}
