<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->comment('Номер категории')
                ->constrained('recipes_categories')
                ->onDelete('cascade');
            $table->string('name', 255)
                ->comment('Название рецепта');
            $table->text('text')
                ->comment('Текст рецепта');
            $table->string('img', 255)->nullable()
                ->comment('Изображение готового блюда');
            $table->foreignId('author')
                ->default(1)
                ->comment('Автор рецепта')
                ->constrained('users')
                ->nullOnDelete();
            $table->unsignedSmallInteger('cooking_time')
                ->comment('Время приготовления');
            $table->enum('cooking_level', ['easy', 'medium', 'hard'])
                ->comment('Уровень кулинарного мастерства');
            $table->unsignedDecimal('weight')
                ->comment('Вес готового блюда');
            $table->unsignedDecimal('calories')
                ->comment('Каллорийность блюда');
            $table->unsignedDecimal('proteins')->nullable()
                ->comment('Белки');
            $table->unsignedDecimal('fats')->nullable()
                ->comment('Жиры');
            $table->unsignedDecimal('carbohydrates')->nullable()
                ->comment('Углеводы');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
