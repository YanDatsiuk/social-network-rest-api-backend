<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAuthGroupUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auth_group_user', function(Blueprint $table)
		{
			$table->foreign('group_id', 'fk_auth_group_user_1')->references('id')->on('auth_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_auth_group_user_2')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('auth_group_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_auth_group_user_1');
			$table->dropForeign('fk_auth_group_user_2');
		});
	}

}
