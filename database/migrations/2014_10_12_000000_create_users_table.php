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
            $table->string('name', 8)->nullable(false)->change();
            $table->string('fullname', 255)->nullable(false)->change();
            $table->string('acc', 32)->nullable(false)->change();
            $table->string('address', 255)->nullable(false)->change();
            $table->integer('phone', 11)->nullable(false)->change();
            $table->string('birth', 255)->nullable(false)->change();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->default(0);
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
