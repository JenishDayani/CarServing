<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('action');
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('contact')->nullable();
            $table->string('city')->nullable();
            $table->string('otp')->nullable();
            $table->integer('role_id')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('db_users');
    }
}
