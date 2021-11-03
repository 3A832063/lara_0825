<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//建立
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();//建立一個名為id的主鍵
            $table->string('title');//建立string資料型態的title欄位
            $table->text('content');//建立text資料型態的content欄位
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
        Schema::dropIfExists('posts');
    }
}
