<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes_types')->insert($this->getType());
    }

    public function getType(): array
    {
        $types = [
            'Завтрак', 'Обед', 'Ужин', 'Перекус', 'Праздничные блюда'
        ];

        $data = [];
        for($i = 0; $i < count($types); $i++) {
            $data[] = [
                'name' => $types[$i],
                'updated_at' => now(),
                'created_at' => now()
            ];
        }

        return $data;
    }
}
