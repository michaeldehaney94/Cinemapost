<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cinema_id')->constrained();
            $table->string('movie_title', '100')->notNull();
            $table->string('movie_rating')->default('N/A')->nullable();
            $table->string('genre', '50')->default('N/A')->nullable();
            $table->text('cast')->nullable();
            $table->string('running_time', '50')->notNull();
            $table->string('release_date', '50')->notNull();
            $table->string('time_playing', '50')->notNull();
            $table->text('plot')->nullable();
            $table->string('movie_poster', '250');
            $table->string('movie_trailer', '250');
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
        Schema::dropIfExists('movies');
    }
}
