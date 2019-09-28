<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title','200');
            $table->text('content');
            $table->string('slug');
            $table->tinyInteger('type')->default(1);
//            $table->year('create_year');
//            $table->string('create_month','200');
            $table->timestamps();
        });
    }


//    public function down()
//    {
//        Schema::dropIfExists('post');
//    }
}
