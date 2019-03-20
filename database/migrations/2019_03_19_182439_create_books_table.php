<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->integer('bookId');
            $table->string('title');
            $table->string('author');
            $table->string('category');
            $table->double('noOfCopies');
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}