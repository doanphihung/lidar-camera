<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectsDetectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects_detection', function (Blueprint $table) {
            $table->id();
            $table->string('kind', 50)->nullable();
            $table->double('initial_x')->nullable();
            $table->double('initial_y')->nullable();
            $table->double('current_x')->nullable();
            $table->double('current_y')->nullable();
            $table->double('distance')->nullable();
            $table->double('step')->nullable();
            $table->double('size')->nullable();
            $table->tinyInteger('read_notice')->default(0);
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
        Schema::dropIfExists('objects_detection');
    }
}
