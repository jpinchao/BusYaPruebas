<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pqr;
use Illuminate\Support\Facades\Auth;

class PqrController extends Controller
{
     // Método para mostrar el formulario de agregar PQR
     public function showForm()
     {
        $user = Auth::user();
        $pqrs = Pqr::where('email', $user->email)->get(); 
        return view('pqr', compact('pqrs'));
     }
     // Método para procesar el envío del formulario y almacenar el PQR
     public function store(Request $request)
     {
        $request->validate([
            'nombre_cliente' => 'required|string',
            'email' => 'required|email',
            'tipo_pqr' => 'required|in:peticion,queja,reclamo',
            'mensaje' => 'required|string',
        ]);

        // Crea una nueva instancia de Pqr con los datos del formulario
        $pqr = new Pqr();
        $pqr->nombre_cliente = $request->input('nombre_cliente');
        $pqr->email = $request->input('email');
        $pqr->tipo = $request->input('tipo_pqr');
        $pqr->mensaje = $request->input('mensaje');
        $pqr->save();
 
         // Puedes enviar notificaciones aquí si es necesario
 
         return redirect()->route('pqr')->with('success', 'PQR registrado exitosamente');
     }
 
     // Método para mostrar el estado y progreso de los PQR previamente registrados
     public function index()
     {
         $pqrs = Pqr::all(); // Obtener todos los PQR
         return view('pqr.index', compact('pqrs'));
     }
    
}
