<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobProviderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_provider', function(Blueprint $table)
		{
			$table->integer('job_provider_id', true);
			$table->integer('user_id')->index('user_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('company_name');
			$table->string('company_website', 500);
			$table->string('email');
			$table->integer('state_id')->index('state_id');
			$table->integer('city_id')->index('city_id');
			$table->integer('category_id')->index('category_id');
			$table->integer('sub_category_id')->index('sub_category_id');
			$table->text('list_title', 65535);
			$table->text('project_description', 65535);
			$table->text('audition_date', 65535);
			$table->string('provide_application_mob_no');
			$table->string('provide_application_photo');
			$table->text('role_title', 65535);
			$table->string('gender');
			$table->string('age_range');
			$table->string('nudity_required', 20);
			$table->text('additional_info', 65535);
			$table->date('application_closing_date');
			$table->string('associated_website', 500);
			$table->string('job_payment');
			$table->string('job_payment_details');
			$table->string('applicant_are_charged', 50);
			$table->text('questions_for_applicants', 65535);
			$table->string('another_email', 500);
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
		Schema::drop('job_provider');
	}

}
