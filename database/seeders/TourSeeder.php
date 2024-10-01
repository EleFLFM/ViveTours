<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Definir 10 tours en ciudades de Colombia
        $tours = [
            [
                'name' => 'Tour por Cartagena de Indias',
                'description' => 'Descubre la belleza colonial de Cartagena con un recorrido por sus murallas y el centro histórico.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-05',
            ],
            [
                'name' => 'Tour en Bogotá',
                'description' => 'Explora la capital de Colombia y visita el Museo del Oro, la Candelaria y el Cerro de Monserrate.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-10-10',
                'end_date' => '2024-10-15',
            ],
            [
                'name' => 'Tour por Medellín',
                'description' => 'Conoce la ciudad de la eterna primavera y disfruta de sus innovaciones urbanas y el Parque Arví.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-10-20',
                'end_date' => '2024-10-25',
            ],
            [
                'name' => 'Tour en Cali',
                'description' => 'Vive la salsa y la alegría de Cali con un recorrido por el Cristo Rey y el barrio San Antonio.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-11-01',
                'end_date' => '2024-11-05',
            ],
            [
                'name' => 'Tour por Barranquilla',
                'description' => 'Visita Barranquilla, la puerta de oro de Colombia, y experimenta su famoso carnaval.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-11-10',
                'end_date' => '2024-11-14',
            ],
            [
                'name' => 'Tour en Santa Marta',
                'description' => 'Disfruta de las playas y montañas de Santa Marta y recorre el Parque Tayrona.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-12-01',
                'end_date' => '2024-12-05',
            ],
            [
                'name' => 'Tour en San Andrés',
                'description' => 'Relájate en las paradisíacas playas de San Andrés y disfruta del mar de siete colores.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-12-10',
                'end_date' => '2024-12-15',
            ],
            [
                'name' => 'Tour por Villa de Leyva',
                'description' => 'Conoce la historia de Villa de Leyva, una de las ciudades coloniales mejor conservadas de Colombia.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-12-20',
                'end_date' => '2024-12-25',
            ],
            [
                'name' => 'Tour en Pereira y el Eje Cafetero',
                'description' => 'Recorre las fincas cafeteras y los paisajes del Eje Cafetero, con base en Pereira.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2024-12-30',
                'end_date' => '2025-01-03',
            ],
            [
                'name' => 'Tour por Popayán',
                'description' => 'Explora la ciudad blanca de Colombia, famosa por su arquitectura colonial y su Semana Santa.',
                'image' => 'a2fdjRtcN82Xeq54KmIEt4JdTO2IIurIJyYMWdHd.jpg',
                'start_date' => '2025-01-05',
                'end_date' => '2025-01-10',
            ]
        ];

        // Insertar los tours en la base de datos
        DB::table('tours')->insert($tours);
    }
}
