<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPivotUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pivot_user_group', function(Blueprint $table)
		{
			$table->foreign('group_id', 'fk_pivot_user_group_1')->references('id')->on('groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('member_id', 'fk_pivot_user_group_2')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pivot_user_group', function(Blueprint $table)
		{
			$table->dropForeign('fk_pivot_user_group_1');
			$table->dropForeign('fk_pivot_user_group_2');
		});
	}

}
