<?php

namespace Database\Seeders;

use App\Models\SocialNetworks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run(): void
    {
        SocialNetworks::create([
            'socialNetworkName'=> 'Facebook', 
            'link'=> 'https://www.facebook.com/profile.php?id=100000841668343',
            'profile_id' => 1
        ]);

        SocialNetworks::create([
            'socialNetworkName'=> 'Instagram',      
            'link'=> 'https://www.instagram.com/buzeta_16x/',
            'profile_id' => 1
        ]);

    }
}
