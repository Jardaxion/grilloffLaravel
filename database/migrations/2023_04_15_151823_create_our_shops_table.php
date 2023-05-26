<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_shops', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('adress');
            $table->string('phone');
            $table->string('fromTo');
            $table->string('fromToDate');
            $table->string('weekend');
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
        Schema::dropIfExists('our_shops');
    }
}
