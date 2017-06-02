<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePivotUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pivot_user_group', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->unsigned()->nullable()->index('index2');
			$table->integer('member_id')->unsigned()->nullable()->index('index3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pivot_user_group');
	}

}
