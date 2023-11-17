<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hobbies;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        Hobbies::create([
            'hobbieName'=> 'Gimnasio', 
            'profile_id' => 1       
        ]);

        Hobbies::create([
            'hobbieName'=> 'VideoJuegos',       
            'profile_id' => 1   
        ]);

        Hobbies::create([
            'hobbieName'=> 'Futbol',
            'profile_id' => 1 
        ]);
    }
}
