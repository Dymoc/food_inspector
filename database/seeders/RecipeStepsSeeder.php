<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeStepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_steps')->insert($this->getRecipes());
    }
    public function getRecipes()
    {
        $steps = [
            1 => [
                [1, 'Влейте в сковороду масло, дайте ему хорошо нагреться', '/images/products/product-2-1.jpg'],
                [2, 'Разбейте яйца в сковороду', '/images/products/product-2-1.jpg'],
                [3, 'Посолите по вкусу', '/images/products/product-2-1.jpg'],
                [4, 'Жарьте яйца до готовности 5-7 минут', '/images/products/product-2-1.jpg'],
            ],
            2 => [
                [1, 'Подготовить все ингредиенты.', '/images/products/product-2-1.jpg'],
                [2, 'Смесь вина, сахара, нарезанных кубиками яблок, ломтиков апельсинов и пряностей довести до кипения.', '/images/products/product-2-1.jpg'],
                [3, 'Снять с огня, настаивать 10 минут.', '/images/products/product-2-1.jpg'],
                [4, 'Затем процедить и разлить по бокалам.', '/images/products/product-2-1.jpg'],
                [5, 'Готово к подаче!', '/images/products/product-2-1.jpg']
            ],
            3 => [
                [1, 'В подсоленной воде сварить пасту аль денте (макароны аль денте слегка твердоваты на зуб).', '/images/products/product-2-1.jpg'],
                [2, 'В глубокой сковороде разогреть оливковое масло и обжарить бекон и чеснок в течение 5 минут, непрерывно помешивая.', '/images/products/product-2-1.jpg'],
                [3, 'Снять с огня.', '/images/products/product-2-1.jpg'],
                [4, 'Приготовленную пасту откинуть на дуршлаг и положить в сковороду.', '/images/products/product-2-1.jpg'],
                [5, 'Добавить в сковороду с пастой 2 яйца целиком и 1 желток.', '/images/products/product-2-1.jpg'],
                [6, 'Посыпать тертым пармезаном и хорошо перемешать.', '/images/products/product-2-1.jpg'],
                [7, 'Поперчить и еще раз посыпать сыром — по желанию.', '/images/products/product-2-1.jpg']
            ],
            4 => [
                [1, 'Поджарить тонкие ломтики бекона до золотистой корочки.', '/images/products/product-2-1.jpg'],
                [2, 'Подогреть хлеб и одну половину сэндвича намазать майонезом (можно приготовить самостоятельно), на вторую положить сыр, ломтики помидоров, бекон и салат.', '/images/products/product-2-1.jpg'],
                [3, 'Тем временем на сливочном масле поджарить небольшую глазунью — такую, чтобы желток был полуготовым.', '/images/products/product-2-1.jpg'],
                [4, 'Выложить глазунью на латук, закрыть другой половинкой сэндвича и подавать.', '/images/products/product-2-1.jpg']
            ],
            5 => [
                [1, 'Чечевицу залить большим количеством воды, варить до тех пор пока она не начнет развариваться. Чуть посолить.', '/images/products/product-2-1.jpg'],
                [2, 'Нарезать лук кольцами и бекон ленточками. Поджарить бекон и лук до коричневатой корочки.', '/images/products/product-2-1.jpg'],
                [3, 'Всыпать в чечевицу бекон и лук, варить еще минут пять.', '/images/products/product-2-1.jpg'],
                [4, 'Влить сливки, выключить огонь.', '/images/products/product-2-1.jpg'],
                [5, 'Добавить нарезанный тонкими пластинками чеснок. Дать настояться минут десять.', '/images/products/product-2-1.jpg']
            ],
        ];

        $data = [];

        foreach ($steps as $key => $recipe) {
            for ($i = 0; $i < count($recipe); $i++) {
                $data[] = [
                    'recipe_id' => $key,
                    'step_number' => $recipe[$i][0],
                    'description' => $recipe[$i][1],
                    'img' => $recipe[$i][2],
                    'updated_at' => now(),
                    'created_at' => now()
                ];
            }
        }

        return $data;
    }
}
