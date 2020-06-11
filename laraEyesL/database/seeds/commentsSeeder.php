<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'email' => 'xime.trelleztrellez@gmail.com',
                'comentario' => 'agregar más información sobre enfermedades raras en los ojos/vista.'
            ],[
                'email' => 'brioche33_marca2@yahoo.com',
                'comentario' => 'Agregar más tipos de enfermedades del cuerpo humano, podrían ser del cerebro, corazón, etc.'
            ],[
                'email' => 'pololo.hdz2@gmail.com',
                'comentario' => 'Buena información, muy completa, me ayudo bastante a mi tarea :)'
            ],[
                'email' => 'jorobadit0_33@outlook.com',
                'comentario' => 'No estaría mal implementar un aparto interactivo para que aprendan los niños sobre esto'
            ],[
                'email' => 'hugoEsteban_Padilla@hotmail.com',
                'comentario' => 'Agregar preguntas (tipo test) para comprobar si aprendimos algo de esto.'
            ],
            [
                'email' => '123dvefv.ijvg@hotmail.com',
                'comentario' => 'agregar más información'
            ],[
                'email' => 'lopez2.lopez@gmail.com',
                'comentario' => 'me agrada la información'
            ]
        ]);
    }
}
