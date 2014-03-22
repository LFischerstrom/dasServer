<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDeploymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deployments', function(Blueprint $table)
		{
			$table->foreign('editor_id')->references('id')->on('units')->onDelete('cascade');
			$table->foreign('editor_department_id')->references('id')->on('units')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deployments', function(Blueprint $table)
		{
			$table->dropForeign('deployments_editor_id_foreign');
			$table->dropForeign('deployments_editor_department_id_foreign');
		});
	}

}
