<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        Profile::create([
            'name'=> 'Giovanny',
            'firstName' => 'Buzeta',
            'lastName' => 'Pinto',
            'identification' => '212858668',
            'career' => 'Ingenieria Civil en computación e informatica',
            'description' => 'amante de los videojuegos y el deporte, me interesa el área del desarrollo web, sin embargo todavía estoy aprendiendo así que te pido paciencia :D, actualmente en sexto semestre de la carrera.',
            'image' => 'https://i.pinimg.com/originals/0a/0b/0a/0a0b0a0a0a0a0a0a0a0a0a0a0a0a0a0.jpg',
           
        ]);
    }
}