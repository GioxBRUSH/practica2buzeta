<?php

namespace Database\Seeders;

use App\Models\Framework;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Frameworks;

class FrameworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        Frameworks::create([
            'frameworkName'=> 'Laravel', 
            'level'=> 25,     
            'profile_id' => 1  
        ]);

        Frameworks::create([
            'frameworkName'=> 'Angular',      
            'level'=> 10,  
            'profile_id' => 1  
        ]);

        Frameworks::create([
            'frameworkName'=> 'React',
            'level'=> 5,
            'profile_id' => 1 
        ]);
    }
}
