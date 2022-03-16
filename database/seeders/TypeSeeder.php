<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'name' => 'normal'
            ],
            [
                'name' => 'fighting'
            ],
            [
                'name' => 'flying'
            ],
            [
                'name' => 'poison'
            ],
            [
                'name' => 'ground'
            ],
            [
                'name' => 'rock'
            ],
            [
                'name' => 'bug'
            ],
            [
                'name' => 'ghost'
            ],
            [
                'name' => 'steel'
            ],
            [
                'name' => 'fire'
            ],
            [
                'name' => 'water'
            ],
            [
                'name' => 'grass'
            ],
            [
                'name' => 'electric'
            ],
            [
                'name' => 'psychic'
            ],
            [
                'name' => 'ice'
            ],
            [
                'name' => 'dragon'
            ],
            [
                'name' => 'dark'
            ],
            [
                'name' => 'fairy'
            ]
        ]);
    }
}
