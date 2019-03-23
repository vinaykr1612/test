<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobSeekerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_seeker', function(Blueprint $table)
		{
			$table->integer('job_seeker_id', true);
			$table->integer('user_id')->index('user_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('gender', 50);
			$table->date('date_of_birth');
			$table->integer('state_id')->index('state_id');
			$table->integer('city_id')->index('city_id');
			$table->string('email');
			$table->integer('category_id')->index('category_id');
			$table->integer('sub_category_id')->index('sub_category_id');
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
		Schema::drop('job_seeker');
	}

}
