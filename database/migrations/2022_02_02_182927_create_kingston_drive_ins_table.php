<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKingstonDriveInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kingston_drive_ins', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('regular');
            $table->string('box');
            $table->string('skybox');
            $table->string('vip');
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
        Schema::dropIfExists('kingston_drive_ins');
    }
}
