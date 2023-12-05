<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Ruta;
use App\Models\Notificacion;

class ClienteController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rutas = Ruta::all();
        return view('indexUsuario', compact('rutas'));
    }

    public function retrasos(Request $request)
    {
        $notificaciones = Notificacion::all();
        return view('retrasos', compact('notificaciones'));
    }
}
