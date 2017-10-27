<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\solicitudes;
use Illuminate\Support\Facades\Auth;

class SolicitudController extends Controller
{
    //
    public function eliminar($id)
    {
        //
        solicitudes::destroy( $id );
        return redirect()->back()->withSuccess('Se han eliminado los datos de la solicitud satisfactoriamente');
    }

    public function editar(Request $request, $id)
    {
    	$solicitud = solicitudes::find($id);

        $request->fecha = \Carbon\Carbon::createFromFormat('d/m/Y', $request->fecha);

        $request->validate([
            'lugar'              => 'required|string|max:50|min:5',
            'tipo'               => 'required|string|max:255',
            'solicitud'          => 'required|string|max:255',
            'observaciones'      => 'required|string|max:255',
            'fundo'              => 'required|string|max:255',
            'fecha'              => 'required|date_format:"d/m/Y"',
            'persona_Cedula'     => 'required|string|max:255|exists:personas,cedula',
            
        ]);

        $solicitud->lugar              = $request->lugar;
        $solicitud->tipo               = $request->tipo;
        $solicitud->solicitud          = $request->solicitud;
        $solicitud->observaciones      = $request->observaciones;
        $solicitud->fundo              = $request->fundo;
        $solicitud->fecha              = $request->fecha;
        $solicitud->persona_Cedula     = $request->persona_Cedula;

    	$solicitud->save();
    	return redirect('/persona/'.$request->persona_Cedula)->withSuccess('Se han actualizado los datos de la solicitud satisfactoriamente');
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
        //dd($request->cedulapersona);
         //$request->persona_Cedula = $request->cedulapersona;
         //$request->funcionario_Cedula = $request->cedulafuncionario;
         //dd($request->funcionario_Cedula);
         //dd(Auth::user()->usuario);

        $request->validate([
            'lugar'              => 'required|string|max:50|min:5',
            'tipo'               => 'required|string|max:255',
            'solicitud'          => 'required|string|max:255',
            'observaciones'      => 'required|string|max:255',
            'fundo'              => 'required|string|max:255',
            'fecha'              => 'required|date_format:"d/m/Y"',
            'persona_Cedula'     => 'required|string|max:255|exists:personas,cedula',
            
        ]);
        
        $request->fecha = \Carbon\Carbon::createFromFormat('d/m/Y', $request->fecha);
         solicitudes::create([
            'lugar'              => $request->lugar,
            'tipo'               => $request->tipo,
            'solicitud'          => $request->solicitud,
            'observaciones'      => $request->observaciones,
            'fundo'              => $request->fundo,
            'fecha'              => $request->fecha,
            'persona_Cedula'     => $request->persona_Cedula,
            'funcionario_Cedula' => Auth::user()->funcionario_Cedula,
            

        ]);
         return redirect('/persona/'.$request->persona_Cedula)->withSuccess('Se han guardado los datos de la solicitud satisfactoriamente');
    }

    


}
