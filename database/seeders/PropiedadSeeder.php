<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propiedad::create([
            'Direccion'=>'La Victoria',
            'MetrosCuadrados'=>50.00,
            'Habitaciones'=>3,
            'Disponible'=>false
        ]);

        Propiedad::create([
            'Direccion'=>'Los Teques',
            'MetrosCuadrados'=>40.00,
            'Habitaciones'=>2,
            'Disponible'=>true
        ]);

        Propiedad::create([
            'Direccion'=>'Cagua La villa',
            'MetrosCuadrados'=>30.00,
            'Habitaciones'=>1,
            'Disponible'=>false
        ]);
    }
}
