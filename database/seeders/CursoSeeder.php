<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new curso();
        $curso->nombre = 'Introducción a Laravel';
        $curso->descripcion = 'Aprende los conceptos básicos de Laravel, un framework de PHP';
        $curso->categoria = 'Desarrollo Web';

        $curso->save();

        $curso2 = new curso();
        $curso2->nombre = 'JavaScript';
        $curso2->descripcion = 'Curso básico de JavaScript para quienes comienzan en la
    programación web.';
        $curso2->categoria = 'Desarrollo Web';

        $curso2->save();

        $curso3 = new curso();
        $curso3->nombre = 'Diseño Gráfico con Photoshop';
        $curso3->descripcion = 'Aprende a usar Adobe Photoshop para crear diseños impresionantes
    desde cero.';
        $curso3->categoria = 'Diseño';
        $curso3->save();
    }
}
