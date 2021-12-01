<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsEatValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eat_values')->insert($this->getEatValue());
    }

    public function getEatValue(): array
    {
        $data = [];
        for($i = 1; $i <= 323; $i++) {
            $data[] = [
                'ingredient_id' => $i,
                'calories' => mt_rand(40, 95),
                'proteins' => mt_rand(0, 35),
                'fats' => mt_rand(0, 20),
                'carbohydrates' => mt_rand(0, 25)
            ];
        }

        return $data;
    }
}
