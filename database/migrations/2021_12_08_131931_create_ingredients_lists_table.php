<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_list_id')
            ->constrained('lists')
            ->onDelete('cascade')
            ->comment('Идентификатор списка');

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
        Schema::dropIfExists('ingredients_lists');
    }
}
