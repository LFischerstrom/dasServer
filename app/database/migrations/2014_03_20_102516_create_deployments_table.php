<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeploymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deployments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('priority');
			$table->integer('editor_id')->unsigned();
			//$table->foreign('editor_id')->references('id')->on('units')->onDelete('cascade');
			$table->integer('editor_department_id')->unsigned();
			//$table->foreign('editor_department_id')->references('id')->on('units')->onDelete('cascade');
			$table->decimal('longitude');
			$table->decimal('latitude');
			$table->boolean('police_needed')->nullable();
			$table->boolean('fire_deparment_needed')->nullable();
			$table->boolean('medic_needed')->nullable();
			$table->boolean('army_needed')->nullable();
			$table->integer('first_revision')->unsigned();
			$table->integer('next_revision')->unsigned();
			$table->text('description');
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
		Schema::drop('deployments');
	}

}
