<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\solicitudes;

class SolicitudController extends Controller
{
    //
    public function eliminar($id)
    {
        //
        solicitudes::destroy( $id );
        return redirect()->back();
    }

    public function editar(Request $request, $id)
    {
    	$solicitud = solicitudes::find($id);

    	$solicitud->lugar = $request->lugar;
    	$solicitud->tipo = $request->tipo;
    	$solicitud->solicitud = $request->solicitud;
    	$solicitud->observaciones = $request->observaciones;
    	$solicitud->fundo = $request->fundo;
    	$solicitud->persona_Cedula = $request->persona_Cedula;
    	$solicitud->funcionario_Cedula = $request->funcionario_Cedula;

    	$solicitud->save();
    	return redirect('/persona/'.$request->persona_Cedula);
    }
    public function edicion($id)
    {
    	$solicitudes = solicitudes::find($id);
        return view('edicionsolicitud', compact('solicitudes')); 
    }

     public function registrar($cedula)
    {
        return view('registrarsolicitudusuario', ['cedula' => $cedula]); 
    }

    public function guardarregistro(Request $request)
    {
        //dd($request);
        //dd($request->cedula);
        /*
        $request->validate([
            'lugar' => 'required|string|max:50|min:5',
            'tipo' => 'required|string|max:255',
            'solicitud' => 'required|string|max:255',
            'observaciones' => 'required|string|max:255',
            'fundo' => 'required|string|max:255',
            'persona_Cedula' => 'required|string|max:255',
            'funcionario_Cedula' => 'required|string|max:255',
            
        ]);
        */
         solicitudes::create([
            'lugar' => $request->lugar,
            'tipo' => $request->tipo,
            'solicitud' => $request->solicitud,
            'observaciones' => $request->observaciones,
            'fundo' => $request->fundo,
            'persona_Cedula' => $request->persona_Cedula,
            'funcionario_Cedula' => $request->funcionario_Cedula,
            

        ]);
         return redirect('/persona/'.$request->persona_Cedula);
    }

    


}
