<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('experience')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('area_id');
            $table->integer('u_id');
            $table->string('con_number')->nullable();
            $table->integer('mechanic_fees')->nullable();
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
        Schema::dropIfExists('db_profiles');
    }
}
