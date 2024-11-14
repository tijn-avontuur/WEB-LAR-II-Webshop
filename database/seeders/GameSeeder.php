<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->insert([
            'title' => 'SnowRunner',
            'description' => 'Get ready for the next-generation off-road experience!',
            'price' => '39.99',	
            'category' => 'Driving',
        ]);

        DB::table('games')->insert([
            'title' => 'Forza Horizon 5',
            'description' => 'Forza Horizon 5 is the open-world driving game series that makes you the boss of the Horizon Festival.',
            'price' => '69.99',	
            'category' => 'Racing',
        ]);

        DB::table('games')->insert([
            'title' => 'Microsoft Flight Simulator',
            'description' => 'From light planes to wide-body jets, fly highly detailed and stunning aircraft in an incredibly realistic world.',
            'price' => '59.99',	
            'category' => 'Simulation',
        ]);

        DB::table('games')->insert([
            'title' => 'Euro Truck Simulator 2',
            'description' => 'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances!',
            'price' => '19.99',	
            'category' => 'Driving',
        ]);

        DB::table('games')->insert([
            'title' => 'Assetto Corsa Competizione',
            'description' => 'Assetto Corsa Competizione is the new official GT World Challenge videogame.',
            'price' => '39.99',	
            'category' => 'Racing',
        ]);

        DB::table('games')->insert([
            'title' => 'American Truck Simulator',
            'description' => 'Experience legendary American trucks and deliver various cargoes across sunny California, sandy Nevada, and the Grand Canyon State of Arizona.',
            'price' => '19.99',	
            'category' => 'Driving',
        ]);
    }
}