<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('anyoed');
            $table->string('lugared');
            $table->integer('numed');
            $table->string('tipocubierta');
            $table->integer('npaginas');
            $table->integer('nstanteria');
            $table->integer('nejemplares');
            $table->text('observaciones');
            $table->foreignId('idautor')
                    ->nullable()
                    ->constrained('autors')
                    ->cascadeOnDelete()
                    ->nullOnDelete();
            $table->foreignId('ideditorial')
                    ->nullable()
                    ->constrained('editorials')
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
        Schema::dropIfExists('libros');
    }
}
