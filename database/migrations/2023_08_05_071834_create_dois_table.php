<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoisTable extends Migration
{
    public function up()
    {
        Schema::create('dois', function (Blueprint $table) {
            $table->id();
            $table->string('doi_file');
            $table->string('doi_url')->nullable();

            $table->string('title');
            $table->string('authors');
            $table->text('abstract');
            $table->string('keywords');

            $table->foreignId('issue_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dois');
    }
}
