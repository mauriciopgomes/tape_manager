<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_inside');
            $table->string('name_outside');
            $table->integer('tape_type_id');
            $table->foreign('tape_type_id')->references('id')->on('tape_types');
            $table->integer('tape_status_id');
            $table->foreign('tape_status_id')->references('id')->on('tape_statuses');
            $table->text('obs')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('tapes');
    }
}
