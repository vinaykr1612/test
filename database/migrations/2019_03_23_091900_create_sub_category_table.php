<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_category', function(Blueprint $table)
		{
			$table->integer('sub_category_id', true);
			$table->integer('category_id')->index('category_id');
			$table->string('sub_category_name');
			$table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('sub_category');
	}

}
