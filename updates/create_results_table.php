<?php

namespace MathieuTanguay\Podium\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

/**
 * Class CreateEventsTable
 *
 * @package MathieuTanguay\Podium\Updates
 *
 * @author Mathieu Tanguay <mathieu.tanguay871@gmail.com>
 * @copyright Mathieu Tanguay
 */
class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('mathieutanguay_podium_results', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('ranking')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('discipline')->nullable();
            $table->string('category')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mathieutanguay_podium_results');
    }

}