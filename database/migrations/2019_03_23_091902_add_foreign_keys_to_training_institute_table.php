<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrainingInstituteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('training_institute', function(Blueprint $table)
		{
			$table->foreign('city_id', 'training_institute_ibfk_1')->references('city_id')->on('city')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('state_id', 'training_institute_ibfk_2')->references('state_id')->on('state')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'training_institute_ibfk_3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('training_institute', function(Blueprint $table)
		{
			$table->dropForeign('training_institute_ibfk_1');
			$table->dropForeign('training_institute_ibfk_2');
			$table->dropForeign('training_institute_ibfk_3');
		});
	}

}
