<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipeStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')
                ->comment('Номер рецепта')
                ->constrained('recipes')
                ->onDelete('cascade');
            $table->integer('step_number')->comment('Номер шага');
            $table->text('description')->comment('Текст шага');
            $table->string('img', 255)
            ->nullable()
            ->comment('Изображение шага');
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
        Schema::table('recipe_steps', function (Blueprint $table) {
            $table->dropForeign('recipe_id');
        });
        Schema::dropIfExists('recipe_steps');
    }
}
