<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('phn');
            $table->string('section');
            $table->string('status')->nullable();
            $table->integer('fee');
            $table->string('sbform');
            $table->string('fcnic');
            $table->string('fjob');
            $table->string('ephn');
            $table->string('sblood');
            $table->string('img');
            $table->string('discount');






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
        Schema::dropIfExists('addmissions');
    }
}
