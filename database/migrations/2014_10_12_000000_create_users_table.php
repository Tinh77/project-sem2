<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->unsignedInteger('account_id');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            // $table->unsignedInteger('logger_account_id');
            // $table->foreign('logger_account_id')->references('id')->on('logger_account_ips'); // logging
            $table->string('username')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('activated')->default(true); // sẽ trở thành false trong tương lai khi implement hệ thống validate 2-step
            $table->boolean('status')->default(true);
            // $table->string('token'); // 2-step
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
        Schema::dropIfExists('users');
    }
}
