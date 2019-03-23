<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingInstituteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_institute', function(Blueprint $table)
		{
			$table->integer('institute_id', true);
			$table->integer('user_id')->index('user_id');
			$table->string('institute_name', 500);
			$table->string('course', 500);
			$table->string('course_duration');
			$table->string('course_fee');
			$table->string('address', 1000);
			$table->integer('state_id')->index('state_id');
			$table->integer('city_id')->index('city_id');
			$table->text('additional_info', 65535);
			$table->string('course_starting_date', 200);
			$table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('modified_date')->nullable();
			$table->boolean('active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('training_institute');
	}

}
