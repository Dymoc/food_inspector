<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeIngridientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->foreignId('recipe_id')
                ->constrained('recipes')
                ->onDelete('cascade')
                ->comment('Идентификатор рецепта');
            $table->foreignId('ingredient_id')
                ->constrained('ingredients')
                ->onDelete('cascade')
                ->comment('Идентификатор ингредиента');
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
        Schema::dropIfExists('recipe_ingridients');
    }
}
