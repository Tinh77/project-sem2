<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('accounts');
            $table->unsignedInteger('buyer_id');
            $table->foreign('buyer_id')->references('id')->on('accounts');
            $table->unsignedInteger('gift_id');
            $table->foreign('gift_id')->references('id')->on('gifts');
            $table->string('token')->nullable()->unique();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('exchages');
    }
}