<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacion;
use App\Models\Ruta;


class ConductorController extends Controller
{
    public function index()
    {
        $rutas = Ruta::all();
        $notificaciones = Notificacion::all();
        return view('indexEmpleado', compact('rutas', 'notificaciones'));
    }
    public function notificar(Request $request)
    {
        $request->validate([
            'ruta' => 'required',
            'descripcion' => 'required',
            'tiempo_estimado' => 'required|numeric',
            // Agrega otras reglas de validación según sea necesario
        ]);
        $user_id = auth()->user()->id;
        Notificacion::create([
            'ruta_id' => $request->ruta_id,
            'descripcion' => $request->descripcion,
            'tiempo_estimado' => $request->tiempo_estimado,
            'user_id' => $user_id,
            // Agrega otros campos según sea necesario
        ]);
        return redirect()->route('conductor.index')->with('success', 'Notificacion enviada');
    }
}
