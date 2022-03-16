<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TypeTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_translations')->insert([
            [
                'type_id' => 1,
                'language_id' => 1,
                'label' => 'Normal'
            ],
            [
                'type_id' => 2,
                'language_id' => 1,
                'label' => 'Fighting'
            ],
            [
                'type_id' => 3,
                'language_id' => 1,
                'label' => 'Flying'
            ],
            [
                'type_id' => 4,
                'language_id' => 1,
                'label' => 'Poison'
            ],
            [
                'type_id' => 5,
                'language_id' => 1,
                'label' => 'Ground'
            ],
            [
                'type_id' => 6,
                'language_id' => 1,
                'label' => 'Rock'
            ],
            [
                'type_id' => 7,
                'language_id' => 1,
                'label' => 'Bug'
            ],
            [
                'type_id' => 8,
                'language_id' => 1,
                'label' => 'Ghost'
            ],
            [
                'type_id' => 9,
                'language_id' => 1,
                'label' => 'Steel'
            ],
            [
                'type_id' => 10,
                'language_id' => 1,
                'label' => 'Fire'
            ],
            [
                'type_id' => 11,
                'language_id' => 1,
                'label' => 'Water'
            ],
            [
                'type_id' => 12,
                'language_id' => 1,
                'label' => 'Grass'
            ],
            [
                'type_id' => 13,
                'language_id' => 1,
                'label' => 'Electric'
            ],
            [
                'type_id' => 14,
                'language_id' => 1,
                'label' => 'Psychic'
            ],
            [
                'type_id' => 15,
                'language_id' => 1,
                'label' => 'Ice'
            ],
            [
                'type_id' => 16,
                'language_id' => 1,
                'label' => 'Dragon'
            ],
            [
                'type_id' => 17,
                'language_id' => 1,
                'label' => 'Dark'
            ],
            [
                'type_id' => 18,
                'language_id' => 1,
                'label' => 'Fairy'
            ]
        ]);
    }
}
