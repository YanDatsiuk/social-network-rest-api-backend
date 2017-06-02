<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAuthActionGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auth_action_group', function(Blueprint $table)
		{
			$table->foreign('action_id', 'fk_auth_action_group_1')->references('id')->on('auth_actions')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('group_id', 'fk_auth_action_group_2')->references('id')->on('auth_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('auth_action_group', function(Blueprint $table)
		{
			$table->dropForeign('fk_auth_action_group_1');
			$table->dropForeign('fk_auth_action_group_2');
		});
	}

}
