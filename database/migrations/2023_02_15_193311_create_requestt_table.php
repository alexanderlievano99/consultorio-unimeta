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
        Schema::create('requestt', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number', 64);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('requirements_id');
            $table->foreign('requirements_id')->references('id')->on('requeriments');
            $table->unsignedBigInteger('sub_requirements_id');
            $table->foreign('sub_requirements_id')->references('id')->on('subb_requeriments');
            $table->string('description');
            $table->string('status');
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
        Schema::dropIfExists('requestt');
    }
};
