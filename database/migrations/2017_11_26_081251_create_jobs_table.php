<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body')->nullable();
            $table->text('tags')->nullable();
            $table->string('emp_type')->nullable();
            $table->string('position')->nullable();
            $table->string('market')->nullable();
            $table->integer('fee_min')->nullable();
            $table->integer('fee_max')->nullable();
            $table->string('company');
            $table->string('address')->nullable();
            $table->decimal('address_lat', 11, 8)->nullable();
            $table->decimal('address_lng', 11, 8)->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
