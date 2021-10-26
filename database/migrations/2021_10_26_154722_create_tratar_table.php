<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idlibro')
                    ->nullable()
                    ->constrained('libros')
                    ->cascadeOnDelete()
                    ->nullOnDelete();
            $table->foreignId('idtema')
                    ->nullable()
                    ->constrained('temas')
                    ->cascadeOnDelete()
                    ->nullOnDelete();
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
        Schema::dropIfExists('tratar');
    }
}
