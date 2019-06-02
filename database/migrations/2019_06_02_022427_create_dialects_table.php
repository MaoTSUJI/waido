<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('miyako_nishibe');
            $table->string('miyako_hirara');
            $table->string('miyako_tarama');
            $table->string('japanese');
            $table->string('english');
            $table->integer('category_id');
            $table->string('hint');
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
        Schema::dropIfExists('dialects');
    }
}
