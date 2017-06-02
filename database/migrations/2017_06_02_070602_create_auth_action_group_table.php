<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthActionGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auth_action_group', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('action_id')->unsigned()->nullable()->index('index2');
			$table->integer('group_id')->unsigned()->nullable()->index('index3');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auth_action_group');
	}

}
