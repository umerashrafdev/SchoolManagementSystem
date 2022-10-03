<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_fees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('phn');
            $table->string('class');
            $table->integer('Afee')->default(0)->nullable(TRUE);
            $table->integer('uniformFee')->default(0)->nullable(TRUE);
            $table->integer('BookFee')->default(0)->nullable(TRUE);
            $table->integer('FirstFee')->default(0)->nullable(TRUE);
            $table->integer('ExamFee')->default(0)->nullable(TRUE);
            $table->integer('cFee')->default(0)->nullable(TRUE);
            $table->integer('ofee')->default(0)->nullable(TRUE);
            $table->integer('discount')->default(0)->nullable(TRUE);
            $table->string('status')->default('pending');


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
        Schema::dropIfExists('admission_fees');
    }
}
