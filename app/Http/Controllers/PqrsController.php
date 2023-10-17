<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PqrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $pqrs = Pqrs::all();
        if($request->is('api/*')){
            return response()->json($pqrs, 200);
        }
        return view('cuenta_Admin.pqrs.view',compact('pqrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    return view('contactanos'/*,compact('pqrs')*/);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $pqr = new Pqrs();
        $pqr->nombre_cliente=$request->nombre_cliente;
        $pqr->email=$request->email;
        $pqr->mensaje=$request->mensaje;
        $pqr->save();

        if($request->is("api/*")){
            return response()->json("Pqrs guardada",200);
        }

        return redirect()->route('contactanos.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(pqrs $pqrs)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*pqrs*/ $pqrs)
    {
        // Se debe dejar editar?
        //$pqr = Pqrs::find($pqrs);
        //return view('cuenta_Admin.contactanos.edit',compact('pqr'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*pqrs*/ $pqrs)
    {
        //editar un pqrs?
        //$pqr = Pqrs::find($pqrs);
        //$pqr->nombre_cliente=$request->nombre_cliente;
        //$pqr->email=$request->email;
        //$pqr->mensaje=$request->mensaje;
        //$pqr->save();
        //return redirect()->route('contactanos.show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*pqrs*/ $pqrs)
    {
        //
        $pqr = Pqrs::find($pqrs);
        $pqr->delete();
        return redirect()->route('pqrs.index');
    }
}
