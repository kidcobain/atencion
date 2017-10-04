<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
		//'user_id' => App\User::all()->random()->id,
        //'created_at' => $faker->dateTimeBetween('-3 years', 'now'),
		//randomElement($array = array ('a','b','c'))

$factory->define(App\usuarios::class, function (Faker $faker) {
    static $password;

    return [
        'usuario' => $faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'rol' => $faker->word,
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\personas::class, function (Faker $faker) {
    static $password;
    //$tipo = $faker->randomElement($array = array ('natural','juridico'));

    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'sexo' => $faker->randomElement($array = array ('m','f')),
        'rif' =>$faker->randomNumber($nbDigits = 9, $strict = false),
        'tipo' =>$faker->randomElement($array = array ('natural','juridico')),
        'cedula' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'representante' =>$faker->firstName,
        'nivel_educativo' =>$faker->randomElement($array = array ('bachiller','universitario')),
        'municipio' => $faker->word,
        'parroquia' => $faker->word,
        'sector' => $faker->word,
        'direccion' => $faker->address,
        'unidad_produccion' => $faker->word,
        'organizacion' => $faker->word,
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,



        /*
        $faker->randomElement($array = array ('v','j')) .
        $table->string('cedula');
        $table->primary('cedula');
        $table->string('nombre');
        $table->string('apellido');
        $table->enum('sexo', ['f', 'm']);
        $table->string('tipo');
        $table->string('rif');
        $table->string('representante');
        $table->string('nivel_educativo');
        $table->string('municipio');
        $table->string('parroquia');
        $table->string('sector');
        $table->string('direccion');
        $table->string('unidad_produccion');
        $table->string('organizacion');
        $table->string('telefono');
        $table->string('email')->unique();
        */
    ];
});

$factory->define(App\solicitudes::class, function (Faker $faker) {
    static $password;

    return [

    	/*
			$table->increments('id');
			$table->string('lugar');
			$table->string('tipo');
			$table->string('solicitud');
			$table->string('observaciones');
			$table->string('fundo');
			$table->timestamps();
			$table->softDeletes();  //deleted_at

			$table->string('persona_Cedula');
			$table->string('funcionario_Cedula');

    	*/
        'lugar' => $faker->state,
        'tipo' => $faker->state,
        'solicitud' => $faker->sentence(3, true),
        'observaciones' => $faker->sentence(6, true),
        'fundo' => $faker->name,

        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});

$factory->define(App\funcionarios::class, function (Faker $faker) {
    static $password;

    return [

    	/*
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
        'cedula' => $faker->randomNumber($nbDigits = 8, $strict = false),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'sexo' => $faker->randomElement($array = array ('m','f')),
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'cargo' => $faker->jobTitle,
        'departamento' => $faker->company,

        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});

