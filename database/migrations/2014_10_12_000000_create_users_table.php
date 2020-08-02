<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->integer('telefono');
            $table->string('email')->unique();
            $table->string('dni')->nullable();
            $table->string('iban')->nullable();
            $table->string('calle')->nullable();
            $table->integer('numeroDireccion')->nullable();
            $table->integer('pisoDireccion')->nullable();
            $table->integer('puertaDireccion')->nullable();
            $table->integer('codigopostal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
