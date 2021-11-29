<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                ->comment('Номер категории')
                ->constrained('news_categories')
                ->onDelete('cascade');
            $table->string('title', 255)
                ->comment('Заголовок статьи');
            $table->text('description')
                ->comment('Текст статьи');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->comment('Автор статьи');
            $table->string('img', 255)
                ->nullable()
                ->comment('Изображение для статьи');
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
        Schema::dropIfExists('news');
    }
}
