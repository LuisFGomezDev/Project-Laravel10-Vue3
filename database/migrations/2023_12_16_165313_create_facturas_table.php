<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('pname');
            $table->string('lastname');
            $table->string('company');
            $table->string('phone');
            $table->string('security_question');
            $table->timestamps();

            //Relacion con la tabla Users 1 a 1
            //$table->foreignId('usuario_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
