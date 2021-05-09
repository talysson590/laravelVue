<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document_type_id');
            $table->foreign('document_type_id')
                ->references('id')
                ->on('document_types')
                ->onDelete('cascade');
            $table->string('title', 100)->comment('Título do documento');
            $table->string('detail', 100)->comment('Detalhes do documento');
            $table->string('file_name', 200)->comment('Nome do arquivo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}