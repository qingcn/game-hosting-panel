<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->mediumText('description'); // TODO: is mediumText overkill

            $table->float('cpu_cost')->default(0);                  // per CPU mark
            $table->float('memory_cost')->default(0);               // per MB
            $table->float('disk_cost')->default(0);                 // per MB
            $table->float('database_cost')->default(0);             // per database

            $table->unsignedInteger('cpu_limit')->default(0);       // per CPU mark
            $table->unsignedInteger('memory_limit')->default(0);    // per MB
            $table->unsignedInteger('disk_limit')->default(0);      // per MB
            $table->unsignedInteger('database_limit')->default(0);  // per database

            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');

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
        Schema::dropIfExists('nodes');
    }
}
