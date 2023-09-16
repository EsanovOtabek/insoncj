<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statiks', function (Blueprint $table) {
            $table->id();
            $table->string('static_tel1');
            $table->string('static_tel2');
            $table->string('static_tel3');
            $table->string('static_email');
            $table->text('adress_uz');
            $table->text('adress_en');
            $table->text('adress_ru');
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
        Schema::dropIfExists('statiks');
    }
}
