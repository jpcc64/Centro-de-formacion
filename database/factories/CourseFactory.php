<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Introducción a la Ciberseguridad',
                'Ciberseguridad Avanzada: Amenazas y Contramedidas',
                'Desarrollo Web con HTML y CSS',
                'Programación Segura: Prácticas para Ciberseguridad',
                'Desarrollo de Aplicaciones Web con JavaScript',
                'Ciberseguridad en la Nube: Principios y Prácticas',
                'Desarrollo de Aplicaciones Móviles Seguras',
                'Seguridad en Redes y Sistemas Informáticos',
                'Curso Completo de Desarrollo Web Full Stack',
                'Introducción a la Ciberinteligencia',
                'Fundamentos de Seguridad Informática',
                'Diseño y Desarrollo de Sitios Web Responsivos',
                'Principios de Ciberseguridad para Desarrolladores Web',
                'Protección de Datos y Privacidad en Internet',
                'Ciberseguridad para Dispositivos Móviles',
                'Gestión de Incidentes de Seguridad Informática',
                'Desarrollo de Aplicaciones Web Seguras',
                'Estrategias de Defensa en Ciberseguridad',
                'Optimización de Seguridad en Desarrollo Web',
            ]),
            'descripcion' => fake()->text(),
            'fechaInicio' => fake()->dateTimeThisYear(),
            'fechaFinal' => fake()->dateTimeThisYear(),
            'tutor' => fake()->name(),
            'categoria' => fake()->randomElement([
                'begginer',
                'intermediate',
                'advanced',
            ]),
        ];
    }
}
