<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	

	Route::get('/personas', function () {
		$persona = App\personas::paginate(15);
	    return view('personas', compact('persona'));
	});
	Route::get('/solicitudes', function () {
		$solicitudes = App\solicitudes::orderBy('fecha','desc')->paginate(15);
	    return view('solicitudes', compact('solicitudes'));
	});

/*
	Route::get('/funcionarios', function () {
		$usuarios = App\User::get();
	    return view('funcionarios', compact('usuarios'));
	});
*/
	Route::get('/funcionarios', function () {
		$funcionarios = App\funcionarios::paginate(15);
	    return view('funcionarios', compact('funcionarios'));
	});

	Route::get('/registrarpersona', function () {
	    return view('registrarpersona');
	});



	Route::get('/solicitud/{cedula}/registrar', 'SolicitudController@registrar'); 
	Route::post('/solicitud/registrar', 'SolicitudController@guardarregistro'); //falta

	//Route::post('/solicitud/registrar', 'SolicitudController@guardar'); //falta

	Route::post('/solicitud/{id}/editar', 'SolicitudController@editar'); 

	Route::get('/solicitud/{id}/edicion', 'SolicitudController@edicion');

	Route::get('/solicitud/{id}/eliminar', 'SolicitudController@eliminar');

	//Route::get('/persona/buscar?cedula={cedula}', 'PersonaController@busqueda');
	Route::post('/persona/registrar', 'PersonaController@store'); 

	Route::get('/persona/buscar',['uses' => 'PersonaController@busqueda','as' => 'busqueda']);
	Route::get('/funcionario/buscar',['uses' => 'funcionarioController@busqueda','as' => 'busqueda']);

	Route::get('/persona/{cedula}/eliminar','PersonaController@eliminar');

	Route::get('/persona/{cedula}/edicion', 'PersonaController@edicion'); //falta

	Route::post('/persona/{cedula}/editar', 'PersonaController@editar'); //falta


	Route::get('/funcionario/autocomplete', 'FuncionarioController@autocomplete'); 

	Route::get('/persona/autocomplete', 'PersonaController@autocomplete'); 
	

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/persona/{cedula}', 'PersonaController@show');

	Route::get('/funcionario/{cedula}', 'FuncionarioController@show');

	Route::get('/funcionario/{cedula}/eliminar','FuncionarioController@eliminar');

	Route::get('/funcionario/{cedula}/edicion', 'FuncionarioController@edicion');

	Route::post('/funcionario/{cedula}/editar', 'FuncionarioController@editar');


});


