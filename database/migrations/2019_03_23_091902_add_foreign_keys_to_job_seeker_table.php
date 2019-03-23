<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobSeekerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('job_seeker', function(Blueprint $table)
		{
			$table->foreign('category_id', 'job_seeker_ibfk_1')->references('category_id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('city_id', 'job_seeker_ibfk_2')->references('city_id')->on('city')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('state_id', 'job_seeker_ibfk_3')->references('state_id')->on('state')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('sub_category_id', 'job_seeker_ibfk_4')->references('sub_category_id')->on('sub_category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'job_seeker_ibfk_5')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('job_seeker', function(Blueprint $table)
		{
			$table->dropForeign('job_seeker_ibfk_1');
			$table->dropForeign('job_seeker_ibfk_2');
			$table->dropForeign('job_seeker_ibfk_3');
			$table->dropForeign('job_seeker_ibfk_4');
			$table->dropForeign('job_seeker_ibfk_5');
		});
	}

}
