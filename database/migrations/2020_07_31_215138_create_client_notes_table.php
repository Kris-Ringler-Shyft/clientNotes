<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_note', function (Blueprint $table) {

            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('note_id');
            $table->timestamps();

            $table->unique(['client_id', 'note_id']);

            $table->foreign('client_id')
                ->references('clients')
                ->on('id')
                ->onDelete('cascade');

            $table->foreign('note_id')
                ->references('notes')
                ->on('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_notes');
    }
}
