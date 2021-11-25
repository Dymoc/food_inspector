<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert($this->getNews());
    }

    public function getNews(): array
    {
        $ingredients = [
            1 => ['Вино белое', 'Вино красное', 'Коньяк', 'Пиво светлое', 'Пиво темное', 'Ром'],
            2 => ['Газированная вода', 'Кола', 'Компот', 'Кофе', 'Сок ананасовый', 'Сок апельсиновый',
                'Сок виноградный', 'Сок гранатовый', 'Сок лайма', 'Сок лимона', 'Сок томатный', 'Сок яблочный'],
            3 => ['Белые грибы маринованные', 'Белые грибы сушеные', 'Вешенки', 'Лисички', 'Маслята', 'Опята',
                'Трюфели', 'Шампиньоны консервированные', 'Шампиньоны свежие'],
            5 => ['Базилик', 'Горошек', 'Зеленый лук', 'Зеленый салат', 'Кинза', 'Лавровый лист', 'Мята',
                'Петрушка', 'Розмарин', 'Тимьян', 'Укроп', 'Фасоль', 'Щавель'],
            6 => [
                'Бекон', 'Ветчина', 'Колбаса вареная', 'Колбаса полукопченая', 'Колбаса сырокопченая', 'Салями',
                'Сардельки', 'Сервелат', 'Сосиски'],
        ];

        $data = [];

        for ($i = 0; $i < count($ingredients); $i++) {
            for ($j = 0; $j < count($ingredients[$i]); $j++) {
                $data[] = [
                    'category_id' => ($ingredients[$i]),
                    'name' => $ingredients[$i][$j],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
