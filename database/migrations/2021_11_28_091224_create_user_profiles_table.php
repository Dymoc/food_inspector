<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->comment('Идентификатор пользователя');
            $table->string('firstname', 255)
                ->comment('Имя пользователя');
            $table->string('lastname', 255)
                ->comment('Фамилия пользователя');
            $table->string('avatar', 255)
                ->nullable()
                ->comment('Изображение для аватара');
            $table->date('birthday')
                ->comment('Дата рождения');
            $table->enum('preferences', ['всеядный', 'вегетарианец', 'на посту', 'трезвенник'])
                ->comment('Продуктовые предпочтения');
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
        Schema::table('user_profiles', function (Blueprint $table) {

            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('user_profiles');
    }
}
