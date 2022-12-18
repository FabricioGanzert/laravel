<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('vehicle_id')->unsigned();
			$table->foreign('vehicle_id')
				  ->references('id')->on('vehicles')
				  ->onDelete('cascade');			
            $table->integer('flagmaintenance');			
            $table->dateTime('datemaintenance');		
			$table->dateTime('created_at')->useCurrent();
			$table->dateTime('updated_at')->useCurrent();
			$table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
};
