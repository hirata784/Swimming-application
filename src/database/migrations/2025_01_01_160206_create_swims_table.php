<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateSwimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swims', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('age', 2);
            $table->string('gender');
            $table->string('tel', 11);
            $table->string('week1');
            $table->string('week2')->nullable();
            $table->string('week3')->nullable();
            $table->string('course');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('swims');
    }
}
