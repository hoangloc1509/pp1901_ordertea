<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 8)->nullable(false);
            $table->string('fullname', 255)->nullable(false);
            $table->string('acc', 32)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->integer('phone')->length(11)->unsigned();
            $table->string('birth', 255)->nullable(false);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image', 255)->nullable(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
