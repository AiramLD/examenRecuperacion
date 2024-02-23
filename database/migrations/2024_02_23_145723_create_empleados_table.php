<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->date('date');
            $table->float('salary');
            $table->string('job');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}

