<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEatValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eat_values', function (Blueprint $table) {
            $table->foreignId('ingredient_id')
                ->constrained('ingredients')
                ->onDelete('cascade')
                ->comment('Идентификатор ингредиента');
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
        Schema::table('eat_values', function (Blueprint $table) {
            $table->dropForeign('ingredient_id');

        });
        Schema::dropIfExists('eat_values');
    }
}
