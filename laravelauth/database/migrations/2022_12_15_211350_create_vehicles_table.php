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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')->on('users')
				  ->onDelete('cascade');			
			$table->string('marca');
            $table->integer('ano');			
            $table->string('modelo');
            $table->string('versao');
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
        Schema::dropIfExists('vehicles');
    }
};