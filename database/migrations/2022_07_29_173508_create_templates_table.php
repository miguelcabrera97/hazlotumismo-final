<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //Muestra las plantillas disponibles a elegir
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('template_name');
            $table->string('template_id');
            $table->string('preview_url');
            $table->string('desktop_thumbnail_url');
            
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
};
