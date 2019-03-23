<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sub_category', function(Blueprint $table)
		{
			$table->foreign('category_id', 'sub_category_ibfk_1')->references('category_id')->on('category')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sub_category', function(Blueprint $table)
		{
			$table->dropForeign('sub_category_ibfk_1');
		});
	}

}
