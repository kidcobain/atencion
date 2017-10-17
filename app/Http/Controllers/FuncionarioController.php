<?php

namespace App\Http\Controllers;


use App\funcionarios;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    
    public function show($cedula)
    {
        $funcionario = $this->findByCedula($cedula);

        return view('funcionario', [
            'funcionario' => $funcionario,
        ]);
    }
    public function edicion($cedula)
    {
        $persona = $this->findByCedula($cedula);

        return view('edicionpersona', [
            'persona' => $persona,
        ]);
    }

    public function eliminar($cedula)
    {
        //
        //personas::destroy( $cedula );
        //$this->findByCedula($cedula)->delete();
        personas::where('cedula', $cedula)->delete();
        return redirect()->back();
    }

    public function busqueda(Request $request)
    {
        //dd($request->cedula);
        //dd($cedula);
        //$keyword=  input::get('cedula');

        $persona = $this->buscarPorCedula($request->cedula);
        return view('personas',[
            'persona' => $persona
        ]);
    }

    protected function buscarPorCedula($cedula)
    {
        return funcionarios::where("cedula", "LIKE", "\\" . $cedula . "%")->get();
        //return funcionarios::where('cedula', $cedula)->firstOrFail();
    }

    protected function findByCedula($cedula)
    {
        return funcionarios::where('cedula', $cedula)->firstOrFail();
        //return funcionarios::where('cedula', $cedula)->firstOrFail();
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->cedula);
        
        $request->validate([
            'cedula' => 'required|string|max:9|unique:personas',
            'nombre' => 'required|string|max:50|min:5',
            'apellido' => 'required|string|max:50|min:5',
            'sexo' => 'required|string|max:1',
            'tipo' => 'required|string|max:255',
            'rif' => 'required|string|max:255',
            'representante' => 'required|string|max:255',
            'nivel_educativo' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'parroquia' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'unidad_produccion' => 'required|string|max:255',
            'organizacion' => 'required|string|max:255',
            'telefono' => 'required|string|min:10|max:11',
            'email' => 'required|string|email|max:50|unique:personas',
        ]);
        
         personas::create([
            'cedula' => $request->cedula,
            'email' => $request->email,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'sexo' => $request->sexo,
            'telefono' => $request->telefono,
            'tipo' => $request->tipo,
            'rif' => $request->rif,
            'representante' => $request->representante,
            'nivel_educativo' => $request->nivel_educativo,
            'municipio' => $request->municipio,
            'parroquia' => $request->parroquia,
            'sector' => $request->sector,
            'direccion' => $request->direccion,
            'unidad_produccion' => $request->unidad_produccion,
            'organizacion' => $request->organizacion,
            

        ]);
         return redirect('/persona/'.$request->cedula);

        // The blog post is valid, store in database...
    }
/*
    public function create(CreateMessageRequest $request)
    {
        $user = $request->user();
        $image = $request->file('image');

        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => $image->store('messages', 'public')
        ]);

        return redirect('/messages/'.$message->id);
    }
*/

    
}