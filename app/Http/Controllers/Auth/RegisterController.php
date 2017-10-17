<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\funcionarios;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //Auth::logout();
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    /*

    $table->string('usuario');
            $table->primary('usuario');
            //$table->string('email')->unique();
            $table->string('contrasenia');
            $table->string('rol');

            $table->string('funcionario_Cedula');
            $table->foreign('funcionario_Cedula')->references('cedula')->on('funcionarios');

    $table->string('cedula');
            $table->primary('cedula');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('sexo', ['f', 'm']);
            $table->string('telefono');
            $table->string('direccion');
            $table->string('cargo');
            $table->string('departamento');


    */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cedula' => 'required|string|max:9|unique:funcionarios',
            'email' => 'required|string|email|max:50|unique:funcionarios',
            'nombre' => 'required|string|max:50|min:5',
            'apellido' => 'required|string|max:50|min:5',
            'sexo' => 'required|string',
            'telefono' => 'required|string|min:10|max:11',
            'direccion' => 'required|string|max:255',
            'cargo' => 'required|string|max:50',
            'departamento' => 'required|string|max:30',
            'usuario' => 'required|string|min:6|max:40|unique:usuarios',
            'password' => 'required|string|min:6|max:20',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         funcionarios::create([
            'cedula' => $data['cedula'],
            'email' => $data['email'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'sexo' => $data['sexo'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'cargo' => $data['cargo'],
            'departamento' => $data['departamento'],
        ]);
         Session()->flash('exito', 'Usuario registrado correctamente, por favor inicie sesion.');
         return User::create([
            'usuario' => $data['usuario'],
            'funcionario_Cedula' => $data['cedula'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
