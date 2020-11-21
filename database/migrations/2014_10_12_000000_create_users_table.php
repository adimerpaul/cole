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
        Schema::defaultStringLength(150);
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('paterno');
            $table->string('materno')->nullable();
            $table->string('nombres');
            $table->string('fechanac');
            $table->string('sexo');
            $table->string('ci')->unique();
            $table->string('fijo')->nullable();
            $table->string('celular');
            $table->string('direccion');
            $table->string('curso');
            $table->string('programacion');
            $table->string('robotica');
            $table->string('capacitacion');
            $table->string('colegio');
            $table->string('foto');
            $table->string('tipo')->default('ESTUDIANTE');
            $table->string('email')->unique();
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
