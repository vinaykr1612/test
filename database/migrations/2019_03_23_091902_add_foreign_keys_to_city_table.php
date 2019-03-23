<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('city', function(Blueprint $table)
		{
			$table->foreign('state_id', 'city_ibfk_1')->references('state_id')->on('state')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('city', function(Blueprint $table)
		{
			$table->dropForeign('city_ibfk_1');
		});
	}

}
