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
    public function index()
    {
        $clientes = Cliente::all();
        return $clientes;//revisar que pagina se va usar para listar los clientes
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente= new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->cedula=$request->cedula;
        $cliente->telefono=$request->telefono;
        $cliente->save();
        $clientes = Cliente::all();
        return response()->json("Cliente Guardado",200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente= Cliente::find(intval($id));
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente= Cliente::find(intval($id));
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {   
        // $request=json_decode($request);
        $cliente= Cliente::find(intval($request->id));//revisar con documentacion actualizada
        $cliente->nombre=$request->nombre;
        $cliente->cedula=$request->cedula;
        $cliente->telefono=$request->telefono;
        $cliente->save();
        return response()->json("Cliente actualizado",200);
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $cliente = Cliente::find($id);
    //     $cliente->delete();
    //     $clientes = Cliente::all();
    //     return $clientes;
    // }

    public function destroy($id)
    {   
        
        $cliente = Cliente::find(intval($id));
        $cliente->delete();
        return response()->json("Cliente eliminado",200);
    }

    public function generar_pdf(){ 
        $clientes = Cliente::all();
        $pdf = PDF\Pdf::loadView('cuenta_Admin.cliente.generar_pdf', compact('clientes'));
        return $pdf->download('Clientes.pdf');
    }
}
