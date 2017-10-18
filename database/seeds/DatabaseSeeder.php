<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //'user_id' => App\User::all()->random()->id,
        //'created_at' => $faker->dateTimeBetween('-3 years', 'now'),

        $func = factory(App\funcionarios::class, 20)->create();
        //$this->command->info('info '.$func->first());

        $func->each(function(App\funcionarios $funcionarios) use ($func) {
            $usuarios = factory(App\usuarios::class)

                ->create([
                    'funcionario_Cedula' => $funcionarios->cedula,
                ]);
            
        });

        $pers = factory(App\personas::class, 20)->create();

        $pers->each(function(App\personas $personas) use ($pers) {
            $solicitudes = factory(App\solicitudes::class)
            	->times(5)
                ->create([
                    'persona_Cedula' => $personas->cedula,
                    'funcionario_Cedula' => App\funcionarios::all()->random()->cedula,
                ]);
            
        });


    }
}
