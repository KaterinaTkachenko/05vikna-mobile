<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
            $table->date('date');
            $table->text('metaKeywords');
            $table->text('metaTitle');
            $table->text('metaDesc');
            $table->text('shortDesc');            
            $table->string('img', 200)->nullable();
            $table->string('alt', 200);
            $table->text('fullDesc');
            $table->boolean('display')->default(false);
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
        Schema::dropIfExists('articles');
    }
}
