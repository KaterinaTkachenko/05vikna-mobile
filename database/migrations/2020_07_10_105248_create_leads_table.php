<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('page', 100)->nullable();
            $table->string('widget', 50)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('phone', 50);
            $table->string('refer', 100)->nullable();

            $table->foreign('status_id')
                ->references('id')->on('status')
                ->onDelete('set null');
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
        Schema::dropIfExists('leads');
    }
}
