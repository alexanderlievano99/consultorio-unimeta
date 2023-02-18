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
        Schema::create('subb_requeriments', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64);
            $table->unsignedBigInteger('requirements_id');
            $table->foreign('requirements_id')->references('id')->on('requeriments');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subb_requeriments');
    }
};
