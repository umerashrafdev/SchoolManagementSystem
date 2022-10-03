<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotiisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notiis', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('des')->nullable();
            $table->string('img')->nullable();
            $table->boolean('forTeacher')->nullable();
            $table->boolean('forStudent')->nullable();
            $table->boolean('forAll')->nullable();
            $table->boolean('forAccountant')->nullable();
            $table->boolean('forPrinciple')->nullable();
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
        Schema::dropIfExists('notiis');
    }
}
