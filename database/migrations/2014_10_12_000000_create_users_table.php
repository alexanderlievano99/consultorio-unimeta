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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_photo')->nullable();
            $table->text('my_description')->nullable();
            $table->string('email')->unique();
            $table->integer('mobile')->nullable();
            $table->unsignedBigInteger('municipality_id')->nullable();
            $table->foreign('municipality_id')->references('id')->on('municipality');
            $table->string('direction')->nullable();
            $table->text('description_of_your_company')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('nit')->nullable();
            $table->unsignedBigInteger('main_cium_code')->nullable();
            $table->foreign('main_cium_code')->references('id')->on('cium_code');
            $table->unsignedBigInteger('secondary_cium_code')->nullable();
            $table->foreign('secondary_cium_code')->references('id')->on('cium_code');
            $table->unsignedBigInteger('optional_cium_code_1')->nullable();
            $table->foreign('optional_cium_code_1')->references('id')->on('cium_code');
            $table->unsignedBigInteger('optional_cium_code_2')->nullable();
            $table->foreign('optional_cium_code_2')->references('id')->on('cium_code');
            $table->timestamp('email_verified_at')->nullable()->nullable();
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
};
