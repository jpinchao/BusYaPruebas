<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacion;

class ConductorController extends Controller
{
    public function index()
    {
        return view('conductor.index');
    }

    public function notificar(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'ruta' => 'required',
            'descripcion' => 'required',
            'tiempo_estimado' => 'required|numeric',
            // Agrega otras reglas de validación según sea necesario
        ]);

        // Crear una nueva notificación en la base de datos
        Notificacion::create([
            'ruta' => $request->ruta,
            'descripcion' => $request->descripcion,
            'tiempo_estimado' => $request->tiempo_estimado,
            // Agrega otros campos según sea necesario
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect('/conductor')->with('success', 'Notificación enviada exitosamente.');
    }
}
